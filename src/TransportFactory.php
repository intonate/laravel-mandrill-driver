<?php

namespace Intonate\Mandrill;

use Illuminate\Support\Arr;
use GuzzleHttp\Client as HttpClient;

class TransportFactory
{
    /**
     * Create an instance of the Mandrill Swift Transport driver.
     *
     * @param  array  $config
     * @return \Intonate\Mandrill\MandrillTransport
     */
    public static function mandrill($config)
    {
        return new MandrillTransport(
            static::guzzle($config), $config['secret']
        );
    }

    /**
     * Get a fresh Guzzle HTTP client instance.
     *
     * @param  array  $config
     * @return \GuzzleHttp\Client
     */
    protected static function guzzle($config)
    {
        return new HttpClient(Arr::add(
            $config['guzzle'] ?? [], 'connect_timeout', 60
        ));
    }
}
