<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Response;

/**
 * Class StateListResponse
 * @package Jetimob\Orulo\Lib\Http\Api\Lists
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/listStates
 */
class StateListResponse extends Response
{
    /** @var string[] $states */
    protected array $states;

    /**
     * @return string[]
     */
    public function getStates(): array
    {
        return $this->states;
    }

    public function initComplexObjects()
    {
        $this->states = $this->data->states;
    }
}
