<?php

namespace Golliaphuth\Bybit\Api;

use Illuminate\Support\Facades\Http;

class Request
{
    protected string $method;
    protected string $endpoint;
    protected array $options = [];
    private array $headers = [];
    private object $response;

    private function init()
    {
        switch ($this->method) {
            case 'GET':
                $this->headers = [
                    'Content-Type' => 'application/x-www-form-urlencoded'
                ];
                break;
            default:
                $this->headers = [
                    'Content-Type' => 'application/json'
                ];
                break;
        }

        $this->options = array_merge($this->options, [
            'api_key' => env('BYBIT_API_KEY'),
            'timestamp' => time() * 1000,
        ]);
        ksort($this->options);
        $temp = $this->options;
        foreach ($temp as $k => $v) if (is_bool($v)) $temp[$k] = $v ? 'true' : 'false';
        $this->options['sign'] = hash_hmac('sha256', urldecode(http_build_query($temp)), env('BYBIT_API_KEY_SECRET'));
    }

    private function response()
    {
        $responseObj = $this->response->object();
        if($responseObj->ret_code !== 0 and $responseObj->ret_code !== '') {
            return [
                'code' => $responseObj->ret_code,
                'message' => $responseObj->ret_msg,
            ];
        }
        return (array) $responseObj->result;
    }

    protected function exec()
    {
        $this->init();

        switch ($this->method) {
            case "GET":
                $this->response = Http::withHeaders($this->headers)
                    ->get(env('BYBIT_API_HOST') . $this->endpoint . '?' . http_build_query($this->options));
                break;
            case "POST":
                $this->response = Http::withHeaders($this->headers)
                    ->post(env('BYBIT_API_HOST') . $this->endpoint, $this->options);
                break;
            case "DELETE":
                $this->response = Http::withHeaders($this->headers)
                    ->delete(env('BYBIT_API_HOST') . $this->endpoint, $this->options);
                break;
        }

        return $this->response();
    }

}
