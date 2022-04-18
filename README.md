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
[getOrder](#spot-getOrder)

[createOrder](#spot-createOrder)

[deleteOrder](#spot-deleteOrder)

[fastDeleteOrder](#spot-fastDeleteOrder)

[getOrderHistory](#spot-getOrderHistory)

[getTradeHistory](#spot-getTradeHistory)

<hr>

<div id="spot-getOrder"></div>

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


<div id="spot-createOrder"></div>

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

<div id="spot-deleteOrder"></div>

### deleteOrder
#### Options
| name                  | required | type   |
|-----------------------|----------|--------|
| orderId / orderLinkId | true     | string |
#### Example
```php
$bybit = new Bybit();
$response = $bybit->spot()->order()->deleteOrder([
    'orderId' => '**************',
]);
dd($response);
```

<div id="spot-fastDeleteOrder"></div>

### fastDeleteOrder
#### Options
| name                  | required | type   |
|-----------------------|----------|--------|
| symbol                | true     | string |
| orderId / orderLinkId | false    | string |
#### Example
```php
$bybit = new Bybit();
$response = $bybit->spot()->order()->fastDeleteOrder([
    'symbol' => 'BTCUSDT',
]);
dd($response);
```

<div id="spot-getOrderHistory"></div>

### getOrderHistory
#### Options
| name      | required | type    |
|-----------|----------|---------|
| symbol    | false    | string  |
| orderId   | false    | string  |
| limit     | false    | integer |
| startTime | false    | long  |
| endTime   | false    | long  |
#### Example
```php
$bybit = new Bybit();
$response = $bybit->spot()->order()->getOrderHistory([
    'symbol' => 'BTCUSDT',
]);
dd($response);
```


<div id="spot-getTradeHistory"></div>

### getTradeHistory
#### Options
| name          | required | type    |
|---------------|----------|---------|
| symbol        | false    | string  |
| orderId       | false    | string  |
| limit         | false    | integer |
| startTime     | false    | long    |
| endTime       | false    | long    |
| fromTicketId  | false    | integer |
| toTicketId    | false    | integer |
#### Example
```php
$bybit = new Bybit();
$response = $bybit->spot()->order()->getTradeHistory([
    'symbol' => 'BTCUSDT',
]);
dd($response);
```
