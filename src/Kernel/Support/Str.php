<?php

/*
 * This file is part of the pkg6/easy-im.
 *
 * (c) pkg6 <https://github.com/pkg6>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Pkg6\easyIm\Kernel\Support;

/**
 * Class Str.
 *
 * @author Pkg6
 */
class Str
{
    /**
     * 去掉第一位为/字符串.
     *
     * @param $str
     *
     * @return bool|string
     */
    public static function removeFristSlash($str)
    {
        if (substr($str, 0, 1) === '/') {
            return substr($str, 1);
        }

        return $str;
    }
}
