<?php

namespace Jetimob\Orulo;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Facades\Cache;
use Jetimob\Orulo\Exception\ConfigurationException;
use Jetimob\Orulo\Exception\EmptyResponseClassException;
use Jetimob\Orulo\Exception\OruloException;
use Jetimob\Orulo\Lib\Http\Api\ErrorResponse;
use Jetimob\Orulo\Lib\Http\Auth\TokenRequest;
use Jetimob\Orulo\Lib\Http\Auth\TokenResponse;
use Jetimob\Orulo\Lib\Http\Exception\AuthorizationException;
use Jetimob\Orulo\Lib\Http\Exception\WrongRequestTypeException;
use Jetimob\Orulo\Lib\Http\Exception\WrongResponseTypeException;
use Jetimob\Orulo\Lib\Http\Request;
use Jetimob\Orulo\Lib\Http\Response;
use Jetimob\Orulo\Util\Log;

class Orulo
{
    private const CONFIG_FILE_REQUIRED_KEYS = [
        'client_id',
        'client_secret',
    ];

    private array $config;

    private array $guzzleOptions;

    private TokenResponse $authorizationToken;

    private Client $apiClient;

    /**
     * Orulo constructor.
     * @param array $config
     * @throws ConfigurationException
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
        $this->guzzleOptions = $this->getConfig('guzzle', []);

        foreach (self::CONFIG_FILE_REQUIRED_KEYS as $key) {
            if (!array_key_exists($key, $config) || empty($config[$key])) {
                throw new ConfigurationException(
                    sprintf(
                        <<<MSG
Missing required keys in orulo's configuration file.
Please make sure to have all [%s] these keys in orulo.php file
MSG,
                        implode(', ', self::CONFIG_FILE_REQUIRED_KEYS),
                    ),
                );
            }
        }

        $this->apiClient = new Client($this->guzzleOptions);
        Log::$enabled = $this->getConfig('logging', false);
    }

    /**
     * @param Request|string $request
     * @param string $clientId
     * @return Response
     * @throws AuthorizationException
     * @throws EmptyResponseClassException
     * @throws Lib\Http\Exception\MissingPropertyBodySchemaException
     * @throws WrongResponseTypeException
     * @throws WrongRequestTypeException
     * @throws OruloException
     */
    public function request($request, ?string $clientId = null)
    {
        if (is_string($request)) {
            $request = new $request();
        }

        if (is_null($request) || !($request instanceof Request)) {
            throw new WrongRequestTypeException();
        }

        $oruloResponse = null;
        $builtBody = $request->build();
        $requestOptions = [];

        if (count($builtBody) > 0) {
            $requestOptions[$request->getBodyType()] = $builtBody;
        }

        if ($request->requiresAuthToken() && !is_null($clientId)) {
            $requestOptions[RequestOptions::HEADERS] = [
                'Authorization' => "Bearer {$this->getAccessToken($clientId)}",
            ];
        }

        try {
            $response = $this->apiClient->request($request->getMethod(), $request->getUrn(), $requestOptions);
            $responseClassName = $request->getResponseClass();

            if (empty($responseClassName)) {
                throw new EmptyResponseClassException();
            }

            if (!method_exists($responseClassName, 'deserialize')) {
                throw new WrongResponseTypeException();
            }

            /** @var Response $oruloResponse */
            $oruloResponse = $responseClassName::deserialize($response->getBody()->getContents());
            $oruloResponse->setStatusCode($response->getStatusCode());
        } catch (ClientException | ServerException $e) {
            $errorResponse = $e->getResponse();
            $oruloResponse = ErrorResponse::deserialize($errorResponse->getBody()->getContents());
            $oruloResponse->setStatusCode($errorResponse->getStatusCode());
        } catch (Exception $e) {
            throw new OruloException($e->getMessage(), 0, $e);
        }

        $oruloResponse->initComplexObjects();
        return $oruloResponse;
    }

    /**
     * Returns an URL that you must redirect the end user to.
     * This URL will ask for the user's permission so that we can use .... TODO
     *
     * @return string
     * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#section/Autenticacao-e-Autorizacao/oruloEndUserAuth
     */
    public function makeAuthorizationUrl(): string
    {
        return sprintf(
            'https://www.orulo.com.br/oauth/authorize?client_id=%s&redirect_uri=%s&response_type=code',
            $this->getConfig('client_id'),
            $this->getConfig('redirect_uri'),
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @throws AuthorizationException
     */
    public function handleAuthorizationResponse(\Illuminate\Http\Request $request)
    {
        if (!$request->has('params')) {
            throw new AuthorizationException('missing required \'code\' param from request');
        }
    }

    /**
     * Returns the cache key used to retrieve a stored authorization response
     *
     * @param string $clientId
     * @return string
     */
    private function getCacheKey(string $clientId): string
    {
        return sprintf('ORULO:CID:%s', $clientId);
    }

    /**
     * Handles the lifecycle of an Orulo's access token.
     * The token is retrieved from the cache if there is one. If there is none, a new one will be requested to Orulo's
     * token generation endpoint.
     *
     * @param string $clientId
     * @return Response
     * @throws AuthorizationException
     * @throws EmptyResponseClassException
     * @throws Lib\Http\Exception\MissingPropertyBodySchemaException
     * @throws OruloException
     * @throws WrongResponseTypeException
     * @throws WrongRequestTypeException
     */
    private function retrieveAccessToken(string $clientId): Response
    {
        $cached = Cache::get($this->getCacheKey($clientId));

        if (!is_null($cached)) {
            return $cached;
        }

        /** @var TokenResponse $response */
        $response = $this->request(TokenRequest::class, $clientId);

        if ($response->failed()) {
            return $response;
        }

        Cache::put($this->getCacheKey($clientId), $response, now()->addSeconds($response->getExpiresIn()));
        return $response;
    }

    /**
     * @param string $clientId
     * @return string
     * @throws AuthorizationException
     * @throws EmptyResponseClassException
     * @throws Lib\Http\Exception\MissingPropertyBodySchemaException
     * @throws OruloException
     * @throws WrongResponseTypeException
     * @throws WrongRequestTypeException
     */
    private function getAccessToken(string $clientId): string
    {
        if (!is_null($this->authorizationToken)) {
            return $this->authorizationToken->getAccessToken();
        }

        /** @var TokenResponse $token */
        $token = $this->retrieveAccessToken($clientId);

        if ($token->failed()) {
            throw new AuthorizationException('token retrieval failed');
        }

        $this->authorizationToken = $token;

        if ($this->isAccessTokenValid()) {
            Cache::forget($this->getCacheKey($clientId));
            return $this->getAccessToken($clientId);
        }

        return $this->authorizationToken->getAccessToken();
    }

    /**
     * Returns true if the current access token is valid, false otherwise
     *
     * @return bool
     */
    private function isAccessTokenValid(): bool
    {
        if (is_null($this->authorizationToken) || $this->authorizationToken->failed()) {
            return false;
        }

        return ($this->authorizationToken->getTimestamp() + $this->authorizationToken->getExpiresIn()) > time();
    }

    /**
     * Returns the configuration value from a given key. Default value is returned if the key is not found.
     *
     * @param string $key
     * @param mixed|null $default
     * @return mixed|null
     */
    public function getConfig(string $key, $default = null)
    {
        return array_key_exists($key, $this->config) ? $this->config[$key] : $default;
    }

    public function useAuthorizationToken(TokenResponse $authorizationToken): self
    {
        $this->authorizationToken = $authorizationToken;
        return $this;
    }
}