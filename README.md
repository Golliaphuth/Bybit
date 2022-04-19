<h1 align="center">Bybit</h1>
<h2 align="center">Bybit API for Laravel </h2>
<br>
<h3 align="left">Install</h3>

```
composer require golliaphuth/bybit
```

### env
```
BYBIT_API_HOST="https://api-testnet.bybit.com"
BYBIT_API_KEY=******************
BYBIT_API_KEY_SECRET=************************************
```

### Examples
```php
$bybit = new Bybit();
$response = $bybit->spot()->market()->getBestBidAskPrice([
    'symbol' => 'BTCUSDT',
]);
dd($response);
```
