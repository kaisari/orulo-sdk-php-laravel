<?php

namespace Jetimob\Orulo\Lib\Http\Api\Building;

use Jetimob\Orulo\Lib\Http\Response;

/**
 * Class PartnerInfoResponse
 * @package Jetimob\Orulo\Lib\Http\Api\Building
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/getPartnerById
 */
class PartnerInfoResponse extends Response
{
    protected string $id;

    protected string $name;

    /** @var string $updated_at <date-time> (DD/MM/YYYY HH:MM:SS) */
    protected string $updated_at;

    protected string $logo;

    protected string $phone;

    protected string $email;

    protected string $webpage;
}