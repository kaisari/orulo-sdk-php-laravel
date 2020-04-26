<?php

namespace Jetimob\Orulo\Lib\Http\Auth;

use Jetimob\Orulo\Lib\Http\BodyType;
use Jetimob\Orulo\Lib\Http\Method;
use Jetimob\Orulo\Lib\Http\Request;

/**
 * Class TokenRequest
 * @package Jetimob\Orulo\Lib\Http\Auth
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#section/Autenticacao-e-Autorizacao/oruloClientAuth
 */
class TokenRequest extends Request
{
    protected string $client_id;

    protected string $client_secret;

    protected string $grant_type = 'client_credentials';

    protected array $bodySchema = ['client_id', 'client_secret', 'grant_type'];

    protected string $bodyType = BodyType::FORM_PARAMS;

    protected bool $requiresAuthToken = false;

    /**
     * TokenRequest constructor.
     *
     * @param string $clientBuildingId
     * @param string $clientSecret
     */
    public function __construct(string $clientBuildingId, string $clientSecret)
    {
        parent::__construct();
        $this->client_id = $clientBuildingId;
        $this->client_secret = $clientSecret;
    }

    /**
     * @inheritDoc
     */
    protected function method(): string
    {
        return Method::POST;
    }

    /**
     * @inheritDoc
     */
    protected function urn(): string
    {
        return 'https://www.orulo.com.br/oauth/token';
    }
}
