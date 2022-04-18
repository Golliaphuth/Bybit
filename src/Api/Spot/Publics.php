<?php

namespace Golliaphuth\Bybit\Api\Spot;

use Golliaphuth\Bybit\Api\Request;
use Illuminate\Support\Facades\Http;

class Publics extends Request
{
    public function getKline($options = [])
    {
        $this->init($options);
        $this->method = 'GET';
        $this->endpoint = '/spot/quote/v1/kline';

        $this->response = Http::withHeaders($this->headers)
            ->get(env('BYBIT_API_HOST') . $this->endpoint . '?' . http_build_query($this->options));

        return $this->response->json();
    }
}
