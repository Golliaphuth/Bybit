<h1 align="center">Bybit</h1>
<h2 align="center">Bybit API for Laravel </h2>
<br>
<br>
<h3 align="left">env</h3>
<hr>
<ul>
<li>BYBIT_API_HOST="https://api-testnet.bybit.com"</li>
<li>BYBIT_API_KEY=******************</li>
<li>BYBIT_API_KEY_SECRET=************************************</li>
</ul>
<hr>
<br>

<h3 align="left">Examples</h3>
<hr>

```php
$bybit = new Bybit();
$response = $bybit->linear()->privates()->getOrder([
    'symbol' => 'BTCUSDT',
    'order_id' => '048998bc-5003-4e3b-8089-5e16461e19cf'
]);
dd($response);
```
<hr>

