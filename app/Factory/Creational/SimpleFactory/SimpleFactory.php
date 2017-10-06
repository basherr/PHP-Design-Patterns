<?php

namespace App\Factory\Creational\SimpleFactory;

class SimpleFactory
{
    public function createBicycle() : Bicycle
    {
        return new Bicycle();
    }
}
