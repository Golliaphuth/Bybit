<?php

namespace Golliaphuth\Bybit;

use Golliaphuth\Bybit\Api\Account\Account;
use Golliaphuth\Bybit\Api\Perpetual\Perpetual;
use Golliaphuth\Bybit\Api\Perpetual\Risk;
use Golliaphuth\Bybit\Api\Server\Server;
use Golliaphuth\Bybit\Api\Spot\Spot;

class Bybit
{

    public function server(): Server
    {
        return new Server();
    }

    public function account(): Account
    {
        return new Account();
    }

    public function spot(): Spot
    {
        return new Spot();
    }

    public function perpetual(): Perpetual
    {
        return new Perpetual();
    }

    public function risk(): Risk
    {
        return new Risk();
    }

}
