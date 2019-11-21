<?php

use PHPUnit\Framework\TestCase;
use App\Factory\Creational\SimpleFactory\Bicycle;
use App\Factory\Creational\SimpleFactory\SimpleFactory;

class SimpleFactoryTest extends TestCase {

    public function testCanCreateBicycleAndDriveToTexas()
    {
        $factory = new SimpleFactory();
        $this->assertSame(Bicycle::class, $factory->createBicycle());
        $this->assertSame('driving to Austin Texas', $factory->createBicycle()->driveTo('Austin Texas'));
    }
}
