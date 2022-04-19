<?php

namespace Golliaphuth\Bybit\Api\Server;

use Golliaphuth\Bybit\Api\Request;

class Server extends Request
{
    public function time()
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/v1/time';
        return $this->exec();
    }
}
