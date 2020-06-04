<?php

namespace Jetimob\Orulo\Lib\Http\Auth;

use Jetimob\Orulo\Lib\Http\Response;
use Serializable;

/**
 * Class TokenResponse
 * @package Jetimob\Orulo\Lib\Http\Auth
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#section/Autenticacao-e-Autorizacao/oruloClientAuth
 */
class TokenResponse extends Response implements Serializable
{
    protected string $access_token;

    protected string $token_type;

    protected int $expires_in;

    protected string $scope;

    protected int $created_at;

    protected ?int $authType;

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->access_token;
    }

    /**
     * @return string
     */
    public function getTokenType(): string
    {
        return $this->token_type;
    }

    /**
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->expires_in;
    }

    /**
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope;
    }

    /**
     * @return array
     */
    public function getParsedScope(): array
    {
        return isset($this->scope) ? explode(' ', $this->scope) : [];
    }

    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->created_at;
    }

    /**
     * @return int|null
     */
    public function getAuthType(): ?int
    {
        return $this->authType;
    }

    /**
     * @param int|null $authType
     */
    public function setAuthType(?int $authType): void
    {
        $this->authType = $authType;
    }

    /**
     * Returns true if this instance contains a valid access_token.
     * Note that if the access token was revoked, the request will return a 401 code.
     *
     * @return bool
     */
    public function isValid(): bool
    {
        return $this->succeeded() && (($this->getTimestamp() + $this->getExpiresIn()) > time());
    }

    /**
     * @inheritDoc
     */
    public function serialize(): string
    {
        return serialize([
            $this->access_token,
            $this->token_type,
            $this->expires_in,
            $this->scope,
            $this->created_at,
            $this->authType,
            $this->getTimestamp(),
            $this->getStatusCode(),
        ]);
    }

    /**
     * @inheritDoc
     */
    public function unserialize($serialized): void
    {
        list(
            $this->access_token,
            $this->token_type,
            $this->expires_in,
            $this->scope,
            $this->created_at,
            $this->authType,
            $timestamp,
            $statusCode,
        ) = unserialize($serialized);

        $this->setTimestamp($timestamp);
        $this->setStatusCode($statusCode);
    }

    public static function build(
        string $access_token,
        string $token_type,
        int $expires_in,
        string $scope,
        int $created_at,
        int $type
    ): self
    {
        $instance = new self();
        $instance->access_token = $access_token;
        $instance->token_type = $token_type;
        $instance->expires_in = $expires_in;
        $instance->scope = $scope;
        $instance->created_at = $created_at;
        $instance->authType = $type;

        return $instance;
    }
}
