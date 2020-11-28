<?php

namespace App\Patterns\Creational\SimpleFactory;

class SimpleFactory
{
    public function createBicycle() : Bicycle
    {
        return new Bicycle();
    }
}
