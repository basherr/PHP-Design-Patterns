<?php

namespace App\Patterns\Structural\AdapterPattern\Human;

class Men implements Human {

    public function speak(): string {
        return "Men can speak";
    }

    public function walk(): string {
        return "Men can walk";
    }
}
