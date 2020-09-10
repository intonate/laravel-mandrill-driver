<?php

namespace Intonate\Tests\Mandrill;

use Intonate\Mandrill\MandrillServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [MandrillServiceProvider::class];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('mail.default', 'mandrill');
        $app['config']->set('mail.mailers.mandrill.transport', 'mandrill');
        $app['config']->set('services.mandrill.secret', 'SomeRandomString');
    }
}
