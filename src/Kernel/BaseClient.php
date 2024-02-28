<?php

/*
 * This file is part of the pkg6/easy-im.
 *
 * (c) pkg6 <https://github.com/pkg6>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Pkg6\easyIm\Kernel;

class BaseClient
{
    use HttpClient;
    /**
     * @var bool
     */
    public static $request_log = false;
    /**
     * @var ServiceContainer
     */
    protected $app;
    /**
     * @var array
     */
    protected $config = [];

    /**
     * BaseClient constructor.
     *
     * @param ServiceContainer $app
     */
    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->config = $app->getConfig();
        $this->_initialize();
    }

    protected function _initialize()
    {
    }

    /**
     * @param $message
     * @param $request
     * @param $response
     */
    public function requestLog($message, $request, $response)
    {
        BaseClient::$request_log && $this->app->logger->debug($message, ['request' => $request, 'response' => $response]);
    }
}
