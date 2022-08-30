<?php

namespace openphp\easyIm\Tencent;

use openphp\easyIm\Kernel\ServiceContainer;

/**
 * Class AppContainer.
 * @property Request\TencentClient request
 */
class AppContainer extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        TencentProvider::class,
    ];
}
