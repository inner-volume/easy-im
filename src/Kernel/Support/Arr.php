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
 * Class Arr.
 *
 * @author Pkg6
 */
class Arr
{
    /**
     * Arr::buildItem(['userID_1','userID_2'], 'uid', ['name' => 'Pkg6']);.
     *
     * Arr::buildItem('userId_1', 'uid', ['name' => 'Pkg6']);
     *
     * @param $ids
     * @param string $idKey
     * @param array $expand
     *
     * @return array
     */
    public static function buildItem($ids, $idKey, array $expand = [])
    {
        $newArr = [];
        if (is_string($ids) || is_numeric($ids)) {
            $item[$idKey] = $ids;
            $newArr[] = array_merge($item, $expand);
        }
        if (is_array($ids)) {
            foreach ($ids as $uid) {
                $item[$idKey] = $uid;
                $newArr[] = array_merge($item, $expand);
            }
        }

        return $newArr;
    }
}
