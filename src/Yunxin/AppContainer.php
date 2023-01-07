<?php

namespace openphp\easyIm\Yunxin;

use openphp\easyIm\Kernel\ServiceContainer;

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
