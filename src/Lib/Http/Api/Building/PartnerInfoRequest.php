<?php

namespace Jetimob\Orulo\Lib\Http\Api\Building;

use Jetimob\Orulo\Lib\Http\Api\GetWClientAuth;

/**
 * Class PartnerInfoRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Building
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/getPartnerById
 */
class PartnerInfoRequest extends GetWClientAuth
{
    protected string $partnerId;

    /**
     * PartnerInfoRequest constructor.
     * @param string $partnerId
     */
    public function __construct(string $partnerId)
    {
        parent::__construct();
        $this->partnerId = $partnerId;
    }

    public function urn(): string
    {
        return 'partners/{partnerId}';
    }

    /**
     * @return string
     */
    public function getPartnerId(): string
    {
        return $this->partnerId;
    }
}