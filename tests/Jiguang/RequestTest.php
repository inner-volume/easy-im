<?php
/*
 * Desc:
 * User: qmister
 * Date: 2021-10-17 18:45
 */

namespace Pkg6\easyIm\Tests\Jiguang;

use Pkg6\easyIm\Jiguang\Request\JiguangClient;
use Pkg6\easyIm\Tests\TestCase;

class RequestTest extends TestCase
{
    public function testUserCreate()
    {
        $app = $this->Jiguang();
        $client = $this->mockApiClient(JiguangClient::class, $app);
        $params = [[
            'username' => 'easy_im',
        ]];
        $resp = $client->send('post', 'users/', $params);
        $data = json_decode($resp, true);
        $this->assertIsArray($data);
    }
}
