<?php

namespace App\Patterns\Structural\AdapterPattern;

interface Human {
    public function walk() : string;
    public function speak() : string;
}
