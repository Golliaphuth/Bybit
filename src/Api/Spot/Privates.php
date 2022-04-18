<?php

namespace Golliaphuth\Bybit\Api\Spot;

use Golliaphuth\Bybit\Api\Request;
use Illuminate\Support\Facades\Http;

class Privates extends Request
{
    public function getOrder($options)
    {
        $this->init($options);
        $this->endpoint = '/spot/v1/order';

        $this->response = Http::withHeaders($this->headers)
            ->get(env('BYBIT_API_HOST') . $this->endpoint . '?' . http_build_query($this->options));

        return $this->response->json();
    }

    public function createOrder($options)
    {
        $this->init($options);
        $this->endpoint = '/spot/v1/order';

        $this->response = Http::withHeaders($this->headers)
            ->post(env('BYBIT_API_HOST') . $this->endpoint, $this->options);

        return $this->response->json();
    }

    public function deleteOrder($options)
    {
        $this->init($options);
        $this->endpoint = '/spot/v1/order';

        $this->response = Http::withHeaders($this->headers)
            ->delete(env('BYBIT_API_HOST') . $this->endpoint, $this->options);

        return $this->response->json();
    }

    public function fastDeleteOrder($options)
    {
        $this->init($options);
        $this->endpoint = '/spot/v1/order/fast';

        $this->response = Http::withHeaders($this->headers)
            ->delete(env('BYBIT_API_HOST') . $this->endpoint, $this->options);

        return $this->response->json();
    }

    public function getOrderHistory($options)
    {
        $this->init($options);
        $this->endpoint = '/spot/v1/history-orders';

        $this->response = Http::withHeaders($this->headers)
            ->get(env('BYBIT_API_HOST') . $this->endpoint . '?' . http_build_query($this->options));

        return $this->response->json();
    }

    public function getTradeHistory($options)
    {
        $this->init($options);
        $this->endpoint = '/spot/v1/myTrades';

        $this->response = Http::withHeaders($this->headers)
            ->get(env('BYBIT_API_HOST') . $this->endpoint . '?' . http_build_query($this->options));

        return $this->response->json();
    }

    public function getBalance($options)
    {
        $this->init($options);
        $this->endpoint = '/spot/v1/account';

        $this->response = Http::withHeaders($this->headers)
            ->get(env('BYBIT_API_HOST') . $this->endpoint . '?' . http_build_query($this->options));

        return $this->response->json();
    }
}
