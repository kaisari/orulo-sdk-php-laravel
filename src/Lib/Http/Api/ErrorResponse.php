<?php

namespace Jetimob\Orulo\Lib\Http\Api;

use Jetimob\Orulo\Lib\Http\Response;

class ErrorResponse extends Response
{
    protected string $error;

    protected string $error_message;
    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error ?? $this->getStatusCode();
    }

    /**
     * @return string
     */
    public function getErrorDescription(): string
    {
        return $this->error_message ?? \Illuminate\Http\Response::$statusTexts[$this->getStatusCode()];
    }
}
