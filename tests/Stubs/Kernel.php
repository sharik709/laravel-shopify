<?php

namespace Osiset\ShopifyApp\Test\Stubs;

class Kernel extends \Orchestra\Testbench\Http\Kernel
{
    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth'       => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings'   => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can'        => \Illuminate\Auth\Middleware\Authorize::class,
        'guest'      => Middleware\RedirectIfAuthenticated::class,
        'throttle'   => \Illuminate\Routing\Middleware\ThrottleRequests::class,

        // Added for testing
        'auth.shopify' => \Osiset\ShopifyApp\Http\Middleware\AuthShopify::class,
        'auth.token'   => \Osiset\ShopifyApp\Http\Middleware\AuthToken::class,
        'auth.webhook' => \Osiset\ShopifyApp\Http\Middleware\AuthWebhook::class,
        'auth.proxy'   => \Osiset\ShopifyApp\Http\Middleware\AuthProxy::class,
        'billable'     => \Osiset\ShopifyApp\Http\Middleware\Billable::class,
    ];
}
