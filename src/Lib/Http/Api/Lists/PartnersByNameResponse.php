<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Model\Partner;
use Jetimob\Orulo\Lib\Http\Response;

/**
 * Class PartnersByNameResponse
 * @package Jetimob\Orulo\Lib\Http\Api\Lists
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/partnersNameSearch
 */
class PartnersByNameResponse extends Response
{
    protected array $partners;

    public function initComplexObjects()
    {
        $this->partners = !empty($this->data->partners) ? Partner::deserializeArray($this->data->partners) : [];
    }

    /**
     * @return array
     */
    public function getPartners(): array
    {
        return $this->partners;
    }
}
