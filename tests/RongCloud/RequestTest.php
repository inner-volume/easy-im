<?php
/*
 * Desc:
 * User: qmister
 * Date: 2021-10-17 18:41
 */

namespace openphp\easyIm\Tests\RongCloud;

use openphp\easyIm\RongCloud\Request\RongCloudClient;
use openphp\easyIm\Tests\TestCase;

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
