<?php

/*
 * This file is part of the pkg6/easy-im.
 *
 * (c) pkg6 <https://github.com/pkg6>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Pkg6\easyIm\Jiguang;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Pkg6\easyIm\Jiguang\Request\JiguangClient;

/**
 * Class JiguangProvider.
 */
class JiguangProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $app
     */
    public function register(Container $app)
    {
        // TODO: Implement register() method.
        $app['request'] = function ($app) {
            return new JiguangClient($app);
        };
    }
}
