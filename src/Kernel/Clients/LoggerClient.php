<?php

namespace Pkg6\easyIm\Kernel\Clients;

use Pkg6\easyIm\Kernel\BaseClient;
use Pkg6\Log\handler\StreamHandler;
use Pkg6\Log\Logger;
use Psr\Log\LoggerInterface;


class LoggerClient extends BaseClient
{

    /**
     * @return LoggerInterface
     */
    protected function logger()
    {
        $config = $this->app->getConfig();
        if (isset($config["logger"])) {
            if ($config["logger"] instanceof LoggerInterface) {
                return $config["logger"];
            }
            if (class_exists($config["logger"]['class'])) {
                $c = new $config["logger"]['class']($config["logger"]);
                if ($c instanceof LoggerInterface) {
                    return $c;
                }
            }
        }
        return new Logger([new StreamHandler()]);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return $this->logger()->$name(...$arguments);
    }
}