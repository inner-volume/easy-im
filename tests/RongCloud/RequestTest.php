<?php
/*
 * Desc:
 * User: qmister
 * Date: 2021-10-17 18:41
 */

namespace Pkg6\easyIm\Tests\RongCloud;

use Pkg6\easyIm\RongCloud\Request\RongCloudClient;
use Pkg6\easyIm\Tests\TestCase;

class RequestTest extends TestCase
{
    public function testGetToken()
    {
        $app = $this->RongCloud();
        $client = $this->mockApiClient(RongCloudClient::class, $app);
        $params = [
            'userId' => 'test',
        ];
        $resp = $client->send('user/getToken.json', $params);
        $data = json_decode($resp, true);
        $this->assertIsArray($data);
    }
}
