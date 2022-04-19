<?php

namespace Golliaphuth\Bybit\Api\Perpetual;

use Golliaphuth\Bybit\Api\Request;

class Risk extends Request
{
    public function get($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/public/linear/risk-limit';
        $this->options = $options;
        return $this->exec();
    }

    public function set($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/private/linear/position/set-risk';
        $this->options = $options;
        return $this->exec();
    }
}
