<h1 align="center">Bybit</h1>
<h3 align="center">API for Laravel </h3>
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

### SPOT
[getOrder](#getOrder)

[createOrder](#createOrder)

[deleteOrder](#heading-ids)

[fastDeleteOrder](#heading-ids)

[getOrderHistory](#heading-ids)

[getTradeHistory](#heading-ids)

<hr>

<div id="getOrder"></div>

### getOrder
#### Options
| name                  | required | type   |
|-----------------------|----------|--------|
| orderId / orderLinkId | true     | string |
#### Example
```php
$bybit = new Bybit();
$response = $bybit->spot()->order()->getOrder([
    'orderId' => '**************',
]);
dd($response);
```


<div id="createOrder"></div>

### createOrder
#### Options
| name        | required | type   |
|-------------|----------|--------|
| symbol      | true     | string |
| qty         | true     | number |
| side        | true     | string |
| type        | true     | string |
| timeInForce | false    | string |
| price       | false    | number |
| orderLinkId | false    | string |
#### Example
```php
$bybit = new Bybit();
$response = $bybit->spot()->order()->createOrder([
    'symbol' => 'BTCUSDT',
    'qty' => 100,
    'side' => 'Buy',
    'type' => 'MARKET',
]);
dd($response);
```
