<?php

namespace Intonate\Tests\Mandrill;

use Illuminate\Mail\Mailer;

class MandrillServiceProviderTest extends TestCase
{
    /** @test */
    public function it_extends_the_mail_manager_with_mandrill_driver()
    {
        $driver = $this->app['mail.manager']->driver('mandrill');

        $this->assertInstanceOf(Mailer::class, $driver);
    }
}
