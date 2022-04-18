<?php

namespace qmister\easyIm\Kernel;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use qmister\easyIm\Kernel\Clients\CacheClient;
use qmister\easyIm\Kernel\Clients\LoggerClient;


class ServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $app A container instance
     */
    public function register(Container $app)
    {
        $app['cache'] = function ($app) {
            return new CacheClient($app);
        };
        $app['logger'] = function ($app) {
            return new LoggerClient($app);
        };
    }
}
