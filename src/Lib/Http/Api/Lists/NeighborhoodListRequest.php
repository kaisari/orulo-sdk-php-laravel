<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Api\GetRequest;

/**
 * Class NeighborhoodListRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Lists
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/addresses
 */
class NeighborhoodListRequest extends GetRequest
{
    private string $state;

    private string $city;

    protected array $bodySchema = ['state', 'city'];

    /**
     * NeighborhoodListRequest constructor.
     * @param string $state
     * @param string $city
     */
    public function __construct(string $state, string $city)
    {
        parent::__construct();
        $this->state = $state;
        $this->city = $city;
    }


    protected function urn(): string
    {
        return 'addresses/areas';
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
}
