<?php

namespace Jetimob\Orulo\Test\Feature;

use Jetimob\Orulo\Facade\Orulo;
use Jetimob\Orulo\Test\TestCase;

class ConfigTestCase extends TestCase
{
    public function testConfig()
    {
        $guzzleConfig = Orulo::getConfig('guzzle');
        $this->assertIsArray($guzzleConfig);
        $this->assertContains('base_uri', $guzzleConfig);
        $this->assertNotNull(Orulo::getConfig('client_id'));
        $this->assertNotNull(Orulo::getConfig('client_secret'));
        $this->assertEquals('https://www.orulo.com.br/api/v2/', $guzzleConfig['base_uri']);
    }
}
