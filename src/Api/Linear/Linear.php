<?php

namespace Golliaphuth\Bybit\Api\Linear;

class Linear
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
