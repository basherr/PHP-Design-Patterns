<?php

namespace App\Factory\Structural\AdapterPattern;

class Men implements Human {

    public function speak(): string {
        return "Men can speak";
    }

    public function walk(): string {
        return "Men can walk";
    }
}
