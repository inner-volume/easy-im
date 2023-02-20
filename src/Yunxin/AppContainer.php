<?php

namespace Pkg6\easyIm\Yunxin;

use Pkg6\easyIm\Kernel\ServiceContainer;

/**
 * Class AppContainer.
 *
 * @property Request\YunxinClient request
 */
class AppContainer extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        YunxinProvider::class,
    ];
}
