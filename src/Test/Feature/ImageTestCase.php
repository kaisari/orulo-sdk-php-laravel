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

        $this->assertNotEmpty($response->getImages());
        $this->assertNotEmpty($response->getImages()[0]->_1024x1024);
        $this->assertEquals(ImageListResponse::class, get_class($response));
    }
}
