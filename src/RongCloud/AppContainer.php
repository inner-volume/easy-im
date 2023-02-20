<?php

namespace Pkg6\easyIm\RongCloud;

use Pkg6\easyIm\Kernel\ServiceContainer;

/**
 * Class AppContainer.
 * @property Request\RongCloudClient request
 */
class AppContainer extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        RongCloudProvider::class,
    ];
}
