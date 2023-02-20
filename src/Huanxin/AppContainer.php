<?php


namespace Pkg6\easyIm\Huanxin;

use Pkg6\easyIm\Kernel\ServiceContainer;

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
