<?php


namespace Pkg6\easyIm\Jiguang;

use Pkg6\easyIm\Kernel\ServiceContainer;

/**
 * Class AppContainer.
 * @property Request\JiguangClient request
 */
class AppContainer extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        JiguangProvider::class,
    ];
}
