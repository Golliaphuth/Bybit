<?php

namespace Golliaphuth\Bybit\Api;

class Request
{
    protected $method;
    protected $endpoint;
    protected $headers = [];
    protected $options = [];
    protected $response;

    public function init($options)
    {
        $this->options = $options;
        $this->headers = [
            'Content-Type' => 'application/json'
        ];
        $this->options = array_merge($this->options, [
            'api_key' => env('BYBIT_API_KEY'),
            'timestamp' => time() * 1000,
        ]);
        ksort($this->options);
        $temp = $this->options;
        foreach ($temp as $k => $v) if (is_bool($v)) $temp[$k] = $v ? 'true' : 'false';
        $this->options['sign'] = hash_hmac('sha256', urldecode(http_build_query($temp)), env('BYBIT_API_KEY_SECRET'));
    }

}
