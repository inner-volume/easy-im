<?php


namespace openphp\easyIm\Jiguang;

use openphp\easyIm\Kernel\ServiceContainer;

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
