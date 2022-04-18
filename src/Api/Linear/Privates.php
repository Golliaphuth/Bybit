<?php

namespace Golliaphuth\Bybit\Api\Linear;

use Golliaphuth\Bybit\Api\Request;
use Illuminate\Support\Facades\Http;

class Privates extends Request
{
    public function getOrder($options)
    {
        $this->init($options);
        $this->endpoint = '/private/linear/order/list';

        $this->response = Http::withHeaders($this->headers)
            ->get(env('BYBIT_API_HOST') . $this->endpoint . '?' . http_build_query($this->options));

        return $this->response->json();
    }

    public function createOrder($options) {
        $this->init($options);
        $this->endpoint = '/private/linear/order/create';

        $this->response = Http::withHeaders($this->headers)
            ->post(env('BYBIT_API_HOST') . $this->endpoint, $this->options);

        return $this->response->json();
    }

    public function cancelOrder($options) {
        $this->init($options);
        $this->endpoint = '/private/linear/order/cancel';

        $this->response = Http::withHeaders($this->headers)
            ->post(env('BYBIT_API_HOST') . $this->endpoint, $this->options);

        return $this->response->json();
    }
}
