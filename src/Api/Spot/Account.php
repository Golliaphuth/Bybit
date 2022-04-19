<?php

namespace Golliaphuth\Bybit\Api\Spot;

use Golliaphuth\Bybit\Api\Request;

class Account extends Request
{
    public function getBalance($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/v1/account';
        $this->options = $options;
        return $this->exec();
    }
}
