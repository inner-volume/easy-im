<?php
/*
 * Desc:
 * User: qmister
 * Date: 2021-10-26 00:01
 */

namespace Pkg6\easyIm\Kernel\Support;

/**
 * Class Str.
 * @author Pkg6
 */
class Str
{
    /**
     * 去掉第一位为/字符串
     * @param $str
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
