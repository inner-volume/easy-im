<?php


namespace openphp\easyIm\Huanxin;

use openphp\easyIm\Kernel\ServiceContainer;

/**
 * Class AppContainer.
 * @property Request\HuanxinClient request
 */
class AppContainer extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        HuanxinProvider::class,
    ];
}
