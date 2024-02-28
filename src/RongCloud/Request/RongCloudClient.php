<?php

/*
 * This file is part of the pkg6/easy-im.
 *
 * (c) pkg6 <https://github.com/pkg6>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Pkg6\easyIm\RongCloud\Request;

use GuzzleHttp\Exception\GuzzleException;
use Pkg6\easyIm\Kernel\BaseClient;
use Pkg6\easyIm\Kernel\Support\Str;

/**
 * 融云IM 即时通讯客户端
 * https://www.rongcloud.cn/product/im
 * https://doc.rongcloud.cn/imserver/server/v1/security/include.
 *
 * $config = [
 *  'appKey' => '',
 *  'appSecret' => '',
 * ]
 * Class RongCloudClient
 */
class RongCloudClient extends BaseClient
{
    /**
     * @var string
     */
    public static $host = 'http://api.cn.ronghub.com';

    /**
     * @param $action
     * @param $params
     *
     * @throws GuzzleException
     *
     * @return string
     */
    public function send($action, $params)
    {
        $this->config['http']['http_errors'] = false;
        $url = RongCloudClient::$host . '/' . Str::removeFristSlash($action);
        $headers = $this->buildHeaders();

        return $this->httpPost($url, $params, $headers);
    }

    /**
     * @return array
     */
    protected function buildHeaders()
    {
        $nonce = mt_rand();
        $timeStamp = time();
        $sign = sha1($this->config['appSecret'] . $nonce . $timeStamp);

        return [
            'RC-AppContainer-Key' => $this->config['appKey'],
            'RC-Nonce' => $nonce,
            'RC-Timestamp' => $timeStamp,
            'RC-Signature' => $sign,
            'Content-Type' => ' application/x-www-form-urlencoded',
        ];
    }
}
