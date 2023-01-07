<?php
/*
 * Desc:
 * User: qmister
 * Date: 2021-10-17 17:44
 */

namespace openphp\easyIm\Tests;

/**
 * Class FactoryTest.
 *
 * @author openphp
 */
class FactoryTest extends TestCase
{
    public function testHuanxin()
    {
        $app = $this->Huanxin();
        $this->assertInstanceOf(\openphp\easyIm\Huanxin\AppContainer::class, $app);
        $this->assertInstanceOf(\openphp\easyIm\Huanxin\Request\HuanxinClient::class, $app->request);
    }

    public function testJiguang()
    {
        $app = $this->Jiguang();
        $this->assertInstanceOf(\openphp\easyIm\Jiguang\AppContainer::class, $app);
        $this->assertInstanceOf(\openphp\easyIm\Jiguang\Request\JiguangClient::class, $app->request);
    }

    public function testRongCloud()
    {
        $app = $this->RongCloud();
        $this->assertInstanceOf(\openphp\easyIm\RongCloud\AppContainer::class, $app);
        $this->assertInstanceOf(\openphp\easyIm\RongCloud\Request\RongCloudClient::class, $app->request);
    }

    public function testTencent()
    {
        $app = $this->Tencent();
        $this->assertInstanceOf(\openphp\easyIm\Tencent\AppContainer::class, $app);
        $this->assertInstanceOf(\openphp\easyIm\Tencent\Request\TencentClient::class, $app->request);
    }

    public function testYunxin()
    {
        $app = $this->Yunxin();
        $this->assertInstanceOf(\openphp\easyIm\Yunxin\AppContainer::class, $app);
        $this->assertInstanceOf(\openphp\easyIm\Yunxin\Request\YunxinClient::class, $app->request);
    }
}
