<?php

namespace Intonate\Tests\Mandrill;

use Intonate\Mandrill\MandrillTransport;

class MandrillServiceProviderTest extends TestCase
{
    /** @test */
    public function it_extends_the_mail_manager_with_mandrill_driver()
    {
        $driver = $this->app['swift.transport']->driver('mandrill');

        $this->assertInstanceOf(MandrillTransport::class, $driver);
    }
}
