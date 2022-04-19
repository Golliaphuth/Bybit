<?php

namespace Golliaphuth\Bybit\Api\Perpetual;

class Perpetual
{
    public function order()
    {
        return new Order();
    }

    public function market()
    {
        return new Market();
    }
}
