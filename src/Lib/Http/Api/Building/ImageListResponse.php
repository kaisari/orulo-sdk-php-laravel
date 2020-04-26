<?php

namespace Jetimob\Orulo\Lib\Http\Api\Building;

use Jetimob\Orulo\Lib\Http\Model\Image;
use Jetimob\Orulo\Lib\Http\Response;

/**
 * Class ImageListResponse
 * @package Jetimob\Orulo\Lib\Http\Api\Building
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/images
 */
class ImageListResponse extends Response
{
    /** @var Image[] $images */
    protected array $images;

    public function initComplexObjects()
    {
        $this->images = $this->deserializeDataArray('images', Image::class);
    }

    /**
     * @return Image[]
     */
    public function getImages(): array
    {
        return $this->images;
    }
}
