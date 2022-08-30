<?php
/*
 * Desc:
 * User: qmister
 * Date: 2021-10-17 18:43
 */

namespace openphp\easyIm\Tests\Yunxin;

use openphp\easyIm\Tests\TestCase;
use openphp\easyIm\Yunxin\Request\YunxinClient;

class RequestTest extends TestCase
{
    public function testUserCreate()
    {
        $app = $this->Yunxin();
        $client = $this->mockApiClient(YunxinClient::class, $app);
        $params = [
            'accid' => 'easyim',
        ];
        $resp = $client->send('nimserver/user/create.action', $params);
        $data = json_decode($resp, true);
        $this->assertIsArray($data);
    }
}
