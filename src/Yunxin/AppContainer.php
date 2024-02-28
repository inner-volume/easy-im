<?php

/*
 * This file is part of the pkg6/easy-im.
 *
 * (c) pkg6 <https://github.com/pkg6>
 *
 * This source file is subject to the MIT license that is bundled.
 */

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
