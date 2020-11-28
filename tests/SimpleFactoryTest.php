<?php

use PHPUnit\Framework\TestCase;
use App\Patterns\Creational\SimpleFactory\Bicycle;
use App\Patterns\Creational\SimpleFactory\SimpleFactory;

class SimpleFactoryTest extends TestCase {

    public function testCanCreateBicycleAndDriveToTexas()
    {
        $factory = new SimpleFactory();
        
        $this->assertInstanceOf(Bicycle::class, $factory->createBicycle());
        $this->assertSame('driving to Austin Texas', $factory->createBicycle()->driveTo('Austin Texas'));
    }
}
