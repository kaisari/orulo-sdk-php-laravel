<?php

namespace Jetimob\Orulo\Lib\Http\Api\Building;

use Jetimob\Orulo\Lib\Http\Model\Typology;
use Jetimob\Orulo\Lib\Http\Response;

/**
 * Class TypologyListResponse
 * @package Jetimob\Orulo\Lib\Http\Api\Building
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/typologies
 */
class TypologyListResponse extends Response
{
    protected array $typologies;

    public function initComplexObjects()
    {
        $this->typologies = $this->deserializeDataArray('typologies', Typology::class);
    }
}