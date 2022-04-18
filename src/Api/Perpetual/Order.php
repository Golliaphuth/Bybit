<?php

namespace Golliaphuth\Bybit\Api\Perpetual;

use Golliaphuth\Bybit\Api\Request;

class Order extends Request
{
    public function getOrder($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/private/linear/order/search';
        $this->options = $options;
        return $this->exec();
    }

    public function createOrder($options)
    {
        $this->method = 'POST';
        $this->endpoint = '/private/linear/order/create';
        $this->options = $options;
        return $this->exec();
    }

    public function deleteOrder($options)
    {
        $this->method = 'POST';
        $this->endpoint = '/private/linear/order/cancel';
        $this->options = $options;
        return $this->exec();
    }

    public function getStopOrder($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/private/linear/stop-order/search';
        $this->options = $options;
        return $this->exec();
    }

    public function getStopOrderList($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/private/linear/stop-order/list';
        $this->options = $options;
        return $this->exec();
    }

    public function createStopOrder($options)
    {
        $this->method = 'POST';
        $this->endpoint = '/private/linear/stop-order/create';
        $this->options = $options;
        return $this->exec();
    }

    public function deleteStopOrder($options)
    {
        $this->method = 'POST';
        $this->endpoint = '/private/linear/stop-order/cancel';
        $this->options = $options;
        return $this->exec();
    }

    public function deleteStopOrderAll($options)
    {
        $this->method = 'POST';
        $this->endpoint = '/private/linear/stop-order/cancel-all';
        $this->options = $options;
        return $this->exec();
    }

}
