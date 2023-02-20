<?php
/*
 * Desc:
 * User: qmister
 * Date: 2021-10-17 17:44
 */

namespace Pkg6\easyIm\Tests;

/**
 * Class FactoryTest.
 *
 * @author Pkg6
 */
class FactoryTest extends TestCase
{
    public function testHuanxin()
    {
        $app = $this->Huanxin();
        $this->assertInstanceOf(\Pkg6\easyIm\Huanxin\AppContainer::class, $app);
        $this->assertInstanceOf(\Pkg6\easyIm\Huanxin\Request\HuanxinClient::class, $app->request);
    }

    public function testJiguang()
    {
        $app = $this->Jiguang();
        $this->assertInstanceOf(\Pkg6\easyIm\Jiguang\AppContainer::class, $app);
        $this->assertInstanceOf(\Pkg6\easyIm\Jiguang\Request\JiguangClient::class, $app->request);
    }

    public function testRongCloud()
    {
        $app = $this->RongCloud();
        $this->assertInstanceOf(\Pkg6\easyIm\RongCloud\AppContainer::class, $app);
        $this->assertInstanceOf(\Pkg6\easyIm\RongCloud\Request\RongCloudClient::class, $app->request);
    }

    public function testTencent()
    {
        $app = $this->Tencent();
        $this->assertInstanceOf(\Pkg6\easyIm\Tencent\AppContainer::class, $app);
        $this->assertInstanceOf(\Pkg6\easyIm\Tencent\Request\TencentClient::class, $app->request);
    }

    public function testYunxin()
    {
        $app = $this->Yunxin();
        $this->assertInstanceOf(\Pkg6\easyIm\Yunxin\AppContainer::class, $app);
        $this->assertInstanceOf(\Pkg6\easyIm\Yunxin\Request\YunxinClient::class, $app->request);
    }
}
