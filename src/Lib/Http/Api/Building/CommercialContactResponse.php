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

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string[]
     */
    public function getEmails(): array
    {
        return $this->emails;
    }

    /**
     * @return string[]
     */
    public function getPhones(): array
    {
        return $this->phones;
    }

    /**
     * @return string
     */
    public function getWebcontact(): string
    {
        return $this->webcontact;
    }

    public function initComplexObjects()
    {
        $this->emails = $this->data->emails ?? [];
        $this->phones = $this->data->phones ?? [];
    }
}
