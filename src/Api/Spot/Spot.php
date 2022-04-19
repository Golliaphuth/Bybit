<?php

namespace Golliaphuth\Bybit\Api\Spot;

class Spot
{
    public function account()
    {
        return new Account();
    }

    public function order()
    {
        return new Order();
    }

    public function market()
    {
        return new Market();
    }
}
