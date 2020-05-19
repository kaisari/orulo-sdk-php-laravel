<?php

namespace Jetimob\Orulo\Lib\Http;

use Jetimob\Orulo\Lib\Http\Exception\MissingPropertyBodySchemaException;
use Jetimob\Orulo\Util\Log;

abstract class Request
{
    protected string $responseClass;

    /**
     * Defines all class properties that should be sent with the request.
     * The access level of the property must be protected or public.
     *
     * @var array $bodySchema
     */
    protected array $bodySchema = [];

    /**
     * Defines the body type sent with the request.
     *
     * @var string
     */
    protected string $bodyType = BodyType::JSON;

    /**
     * UNIX timestamp of the moment of the request.
     *
     * @var int $timestamp
     */
    private int $timestamp;

    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->timestamp = time();

        if (empty($this->responseClass)) {
            $this->responseClass = preg_replace(
                '/Request$/',
                '$1Response',
                get_called_class()
            );
        }
    }

    /**
     * Every extending class MUST declare its method of request.
     * @return string
     */
    abstract public function method(): string;

    /**
     * Every extending class MUST declare its urn.
     * @return string
     */
    abstract public function urn(): string;

    /**
     * Each request must specify its request authentication method.
     * Return null if the request doesn't need authentication.
     * @return int|null
     * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#section/Autenticacao-e-Autorizacao
     */
    abstract public function authType(): ?int;

    /**
     * Returns the request HTTP method.
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method();
    }

    /**
     * Returns the endpoint that this request is hitting on Juno's API server.
     *
     * @return string
     */
    public function getUrn(): string
    {
        $matches = [];
        $urn = $this->urn();

        if (!preg_match_all('/{([[:alpha:]]+?)}/', $urn, $matches)) {
            return $urn;
        }

        for ($i = 0; $i < count($matches[1]); $i++) {
            $propertyName = $matches[1][$i];

            if (isset($this->{$propertyName}) && !empty($propertyValue = $this->{$propertyName})) {
                $urn = preg_replace("/{$matches[0][$i]}/", $propertyValue, $urn);
            }
        }

        return $urn;
    }

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return $this->responseClass;
    }

    /**
     * @return array
     */
    public function getBodySchema(): array
    {
        return $this->bodySchema;
    }

    /**
     * @return string
     */
    public function getBodyType(): string
    {
        return $this->bodyType;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * @return array
     * @throws MissingPropertyBodySchemaException
     */
    public function build(): array
    {
        $schema = $this->getBodySchema();

        if (count($schema) === 0) {
            return [];
        }

        $data = [];

        foreach ($schema as $property) {
            if (!property_exists($this, $property)) {
                throw new MissingPropertyBodySchemaException($property, $this);
            }

            if (!isset($this->{$property}) || is_null($this->{$property})) {
                continue;
            }

            $data[$property] = $this->{$property};
        }

        $returnData = json_decode(json_encode($data), true);
        return $this->sanitizeArray($returnData);
    }

    /**
     * Clears empty values from the given array
     *
     * @param array $data
     * @return array
     */
    private function sanitizeArray(array &$data): array
    {
        foreach (array_keys($data) as $arrK) {
            if (empty($data[$arrK])) {
                unset($data[$arrK]);
            } elseif (is_array($data[$arrK])) {
                $data[$arrK] = $this->sanitizeArray($data[$arrK]);
            }
        }

        return $data;
    }
}
