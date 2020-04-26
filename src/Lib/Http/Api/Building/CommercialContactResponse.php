<?php

namespace Jetimob\Orulo\Lib\Http\Api\Building;

use Jetimob\Orulo\Lib\Http\Response;

/**
 * Class CommercialContactResponse
 * @package Jetimob\Orulo\Lib\Http\Api\Building
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/contacts
 */
class CommercialContactResponse extends Response
{
    protected string $id;

    protected string $name;

    /** @var string[] $emails */
    protected array $emails;

    /** @var string[] $phones */
    protected array $phones;

    protected string $webcontact;

    public function initComplexObjects()
    {
        $this->emails = $this->data->emails ?? [];
        $this->phones = $this->data->phones ?? [];
    }
}
