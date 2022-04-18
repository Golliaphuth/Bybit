<?php

namespace Golliaphuth\Bybit\Api\Spot;

class Spot
{
    public function publics()
    {
        return new Publics();
    }

    public function privates()
    {
        return new Privates();
    }
}
