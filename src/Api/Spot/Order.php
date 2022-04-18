<?php

namespace Golliaphuth\Bybit\Api\Spot;

use Golliaphuth\Bybit\Api\Request;

class Order extends Request
{
    public function getOrder($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/v1/order';
        $this->options = $options;
        return $this->exec();
    }

    public function createOrder($options)
    {
        $this->method = 'POST';
        $this->endpoint = '/spot/v1/order';
        $this->options = $options;
        return $this->exec();
    }

    public function deleteOrder($options)
    {
        $this->method = 'DELETE';
        $this->endpoint = '/spot/v1/order';
        $this->options = $options;
        return $this->exec();
    }

    public function fastDeleteOrder($options)
    {
        $this->method = 'DELETE';
        $this->endpoint = '/spot/v1/order/fast';
        $this->options = $options;
        return $this->exec();
    }

    public function getOrderHistory($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/v1/history-orders';
        $this->options = $options;
        return $this->exec();
    }

    public function getTradeHistory($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/v1/myTrades';
        $this->options = $options;
        return $this->exec();
    }
}
