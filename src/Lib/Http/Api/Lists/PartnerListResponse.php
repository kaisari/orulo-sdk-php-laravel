<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Model\PartnerSummary;
use Jetimob\Orulo\Lib\Http\Response;

/**
 * Class PartnerListResponse
 * @package Jetimob\Orulo\Lib\Http\Api\Lists
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/partners
 */
class PartnerListResponse extends Response
{
    protected array $partners;

    protected int $total;

    protected int $page;

    protected int $total_pages;

    public function initComplexObjects()
    {
        $this->partners = !empty($this->data->partners) ? PartnerSummary::deserializeArray($this->data->partners) : [];
    }

    /**
     * @return array
     */
    public function getPartners(): array
    {
        return $this->partners;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->total_pages;
    }
}
