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

    protected ?string $code;

    protected string $grant_type = 'client_credentials';

    protected array $bodySchema = ['client_id', 'client_secret', 'grant_type', 'code'];

    protected string $bodyType = BodyType::FORM_PARAMS;

    /**
     * TokenRequest constructor.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string|null $code
     */
    public function __construct(string $clientId, string $clientSecret, ?string $code = null)
    {
        parent::__construct();
        $this->client_id = $clientId;
        $this->client_secret = $clientSecret;
        $this->code = $code;
    }

    /**
     * @inheritDoc
     */
    public function method(): string
    {
        return Method::POST;
    }

    /**
     * @inheritDoc
     */
    public function urn(): string
    {
        return 'https://www.orulo.com.br/oauth/token';
    }

    public function authType(): ?int
    {
        return null;
    }
}
