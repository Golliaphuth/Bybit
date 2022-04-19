<?php

namespace Golliaphuth\Bybit\Api\Spot;

use Golliaphuth\Bybit\Api\Request;

class Market extends Request
{
    public function getSymbol($options = [])
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/v1/symbols';
        $this->options = $options;
        return $this->exec();
    }

    public function getKline($options = [])
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/quote/v1/kline';
        $this->options = $options;
        return $this->exec();
    }

    public function getDepth($options = [])
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/quote/v1/depth';
        $this->options = $options;
        return $this->exec();
    }

    public function getDepthMerged($options = [])
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/quote/v1/depth/merged';
        $this->options = $options;
        return $this->exec();
    }

    public function getTrades($options = [])
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/quote/v1/trades';
        $this->options = $options;
        return $this->exec();
    }

    public function getTicker24($options = [])
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/quote/v1/ticker/24hr';
        $this->options = $options;
        return $this->exec();
    }

    public function getLastTradedPrice($options = [])
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/quote/v1/ticker/price';
        $this->options = $options;
        return $this->exec();
    }

    public function getBestBidAskPrice($options = [])
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/quote/v1/ticker/book_ticker';
        $this->options = $options;
        return $this->exec();
    }
}
