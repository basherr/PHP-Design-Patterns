<?php

use PHPUnit\Framework\TestCase;
use App\Patterns\Structural\AdapterPattern\Human\KidsAdapter;
use App\Patterns\Structural\AdapterPattern\Human\Men;

class AdapterPatternTest extends TestCase {

    public function testKidsCanWalkAndSpeak() {
       $kids = new KidsAdapter;
       $this->assertEquals("Kids can move but can't walk", $kids->walk());
       $this->assertEquals("Kids can smile or weep", $kids->speak());
    }

    public function testMenCanWalkAndSpeak() {
       $men = new Men;
       $this->assertEquals("Men can walk", $men->walk());
       $this->assertEquals("Men can speak", $men->speak());
    }
}
