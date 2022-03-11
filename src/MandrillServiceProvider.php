<?php

namespace Intonate\Mandrill;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Mailer\Bridge\Mailchimp\Transport\MandrillTransportFactory;
use Symfony\Component\Mailer\Transport\Dsn;

class MandrillServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['mail.manager']->extend('mandrill', function () {
            return (new MandrillTransportFactory)->create(
                new Dsn(
                    'mandrill+api',
                    'default',
                    $this->app['config']->get('services.mandrill.secret')
                )
            );
        });
    }
}
