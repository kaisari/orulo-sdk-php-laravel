<?php

namespace Jetimob\Orulo\Test\Feature;

use Jetimob\Orulo\Lib\Http\Api\Building\ImageListRequest;
use Jetimob\Orulo\Lib\Http\Api\Building\ImageListResponse;
use Jetimob\Orulo\Test\TestCase;

class ImageTestCase extends TestCase
{
    public function testImageList()
    {
        $request = new ImageListRequest('', ['1024x1024', '520x280']);
        /** @var ImageListResponse $response */
        $response = $this->makeAndAssert($request);

        $images = $response->getImages();
        $this->assertNotEmpty($images);

        $image = $images[0];
        $this->assertNotEmpty($image);
        $this->assertNotEmpty($image->get1024x1024());
        $this->assertNotNull($image->getDescription());
        $this->assertNotEmpty($image->getId());
        $this->assertNotEmpty($image->get520x280());
        $this->assertNull($image->get200x140());
        $this->assertEquals(ImageListResponse::class, get_class($response));
    }
}
