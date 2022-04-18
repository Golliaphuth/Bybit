<?php

namespace Golliaphuth\Bybit\Api\Spot;

class Spot
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
