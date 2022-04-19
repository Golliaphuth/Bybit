<?php

namespace Golliaphuth\Bybit\Api\Perpetual;

use Golliaphuth\Bybit\Api\Request;

class Market extends Request
{
    public function kline($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/public/linear/kline';
        $this->options = $options;
        return $this->exec();
    }
}
