<?php

namespace Golliaphuth\Bybit;

use Golliaphuth\Bybit\Api\Spot\Spot;

class Bybit
{

    public function spot(): Spot
    {
        return new Spot();
    }

}
