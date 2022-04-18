<?php

namespace Golliaphuth\Bybit;

use Golliaphuth\Bybit\Api\Linear\Linear;
use Golliaphuth\Bybit\Api\Spot\Spot;

class Bybit
{

    public function spot(): Spot
    {
        return new Spot();
    }

    public function linear(): Linear
    {
        return new Linear();
    }

}
