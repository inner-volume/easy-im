<?php
/*
 * Desc:
 * User: qmister
 * Date: 2021-10-17 22:15
 */

namespace openphp\easyIm\Tests\Huanxin;

use openphp\easyIm\Huanxin\Request\HuanxinClient;
use openphp\easyIm\Tests\TestCase;

class RequestTest extends TestCase
{
    public function testGetToken()
    {
        $app = $this->Huanxin();
        $client = $this->mockApiClient(HuanxinClient::class, $app);
        $resp = $client->getToken();
        $data = json_decode($resp, true);
        $this->assertIsArray($data);
    }
}
