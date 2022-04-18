<?php

namespace Golliaphuth\Bybit\Api\Spot;

use Golliaphuth\Bybit\Api\Request;
use Illuminate\Support\Facades\Http;

class Publics extends Request
{
    public function getSymbol($options = [])
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/v1/symbols';
        $this->init($options);

        $this->response = Http::withHeaders($this->headers)
            ->get(env('BYBIT_API_HOST') . $this->endpoint . '?' . http_build_query($this->options));

        return $this->response->json();
    }

    public function getKline($options = [])
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/quote/v1/kline';
        $this->init($options);

        $this->response = Http::withHeaders($this->headers)
            ->get(env('BYBIT_API_HOST') . $this->endpoint . '?' . http_build_query($this->options));

        return $this->response->json();
    }

    public function getDepth($options = [])
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/quote/v1/depth';
        $this->init($options);

        $this->response = Http::withHeaders($this->headers)
            ->get(env('BYBIT_API_HOST') . $this->endpoint . '?' . http_build_query($this->options));

        return $this->response->json();
    }
}
