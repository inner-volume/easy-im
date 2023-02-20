<?php

namespace Pkg6\easyIm\Tencent;

use Pkg6\easyIm\Kernel\ServiceContainer;

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
