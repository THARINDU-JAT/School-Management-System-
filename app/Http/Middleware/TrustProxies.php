<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = [
        Request::HEADER_X_FORWARDED_FOR => 'X_FORWARDED_FOR_HEADER_NAME',
        Request::HEADER_X_FORWARDED_PROTO => 'X_FORWARDED_PROTO_HEADER_NAME',
        Request::HEADER_X_FORWARDED_PORT => 'X_FORWARDED_PORT_HEADER_NAME',
        Request::HEADER_X_FORWARDED_ALL => 'X_FORWARDED_ALL_HEADER_NAME',
    ];
    
}
