<?php
/*
 * Desc:
 * User: qmister
 * Date: 2021-10-17 23:00
 */

namespace openphp\easyIm\Kernel\Support;

/**
 * Class Arr.
 *
 * @author openphp
 */
class Arr
{
    /**
     * Arr::buildItem(['userID_1','userID_2'], 'uid', ['name' => 'openphp']);.
     *
     * Arr::buildItem('userId_1', 'uid', ['name' => 'openphp']);
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
            $newArr[]     = array_merge($item, $expand);
        }
        if (is_array($ids)) {
            foreach ($ids as $uid) {
                $item[$idKey] = $uid;
                $newArr[]     = array_merge($item, $expand);
            }
        }
        return $newArr;
    }
}
