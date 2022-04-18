<?php

namespace Golliaphuth\Bybit\Api\Spot;

use Golliaphuth\Bybit\Api\Request;
use Illuminate\Support\Facades\Http;

class Privates extends Request
{
    public function getOrder($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/v1/order';
        $this->init($options);

        $this->response = Http::withHeaders($this->headers)
            ->get(env('BYBIT_API_HOST') . $this->endpoint . '?' . http_build_query($this->options));

        return $this->response->json();
    }

    public function createOrder($options)
    {
        $this->method = 'POST';
        $this->endpoint = '/spot/v1/order';
        $this->init($options);

        $this->response = Http::withHeaders($this->headers)
            ->post(env('BYBIT_API_HOST') . $this->endpoint, $this->options);

        return $this->response->json();
    }

    public function deleteOrder($options)
    {
        $this->method = 'DELETE';
        $this->endpoint = '/spot/v1/order';
        $this->init($options);

        $this->response = Http::withHeaders($this->headers)
            ->delete(env('BYBIT_API_HOST') . $this->endpoint, $this->options);

        return $this->response->json();
    }

    public function fastDeleteOrder($options)
    {
        $this->method = 'DELETE';
        $this->endpoint = '/spot/v1/order/fast';
        $this->init($options);

        $this->response = Http::withHeaders($this->headers)
            ->delete(env('BYBIT_API_HOST') . $this->endpoint, $this->options);

        return $this->response->json();
    }

    public function getOrderHistory($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/v1/history-orders';
        $this->init($options);

        $this->response = Http::withHeaders($this->headers)
            ->get(env('BYBIT_API_HOST') . $this->endpoint . '?' . http_build_query($this->options));

        return $this->response->json();
    }

    public function getTradeHistory($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/v1/myTrades';
        $this->init($options);

        $this->response = Http::withHeaders($this->headers)
            ->get(env('BYBIT_API_HOST') . $this->endpoint . '?' . http_build_query($this->options));

        return $this->response->json();
    }

    public function getBalance($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/v1/account';
        $this->init($options);

        $this->response = Http::withHeaders($this->headers)
            ->get(env('BYBIT_API_HOST') . $this->endpoint . '?' . http_build_query($this->options));

        return $this->response->json();
    }
}
