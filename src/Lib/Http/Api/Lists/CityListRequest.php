<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Api\GetWClientAuth;

/**
 * Class CityListRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Lists
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/listCities
 */
class CityListRequest extends GetWClientAuth
{
    private string $state;

    protected array $bodySchema = ['state'];

    /**
     * CityListRequest constructor.
     * @param string $state
     */
    public function __construct(string $state)
    {
        parent::__construct();
        $this->state = $state;
    }

    public function urn(): string
    {
        return 'addresses/cities';
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
}
