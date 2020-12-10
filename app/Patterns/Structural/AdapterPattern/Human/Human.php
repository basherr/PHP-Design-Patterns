<?php

namespace App\Patterns\Structural\AdapterPattern\Human;

interface Human {
    public function walk() : string;
    public function speak() : string;
}
