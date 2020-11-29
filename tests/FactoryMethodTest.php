<?php

use PHPUnit\Framework\TestCase;
use App\Patterns\Creational\FactoryMethod\CarManufacturer\ItalianFactory;
use App\Patterns\Creational\FactoryMethod\CarManufacturer\FactoryMethod;
use App\Patterns\Creational\FactoryMethod\CarManufacturer\GermanFactory;
use App\Patterns\Creational\FactoryMethod\CarManufacturer\Suzki;
use App\Patterns\Creational\FactoryMethod\CarManufacturer\Alto;
use App\Patterns\Creational\FactoryMethod\CarManufacturer\Mehran;
use App\Patterns\Creational\FactoryMethod\CarManufacturer\Ferrari;

class FactoryMethodTest extends TestCase {
	
	public function testCanCreateAGermanVehicle()
	{
		$factory = new GermanFactory;
		$car = $factory->create(FactoryMethod::FAST, 'yellow');
		$car2 = $factory->create(FactoryMethod::CHEAP, 'red');

		$this->assertInstanceOf(Alto::class, $car);
		$this->assertInstanceOf(Suzki::class, $car2);
	}

	public function testCanCreateAItalianVehicle()
	{
		$factory = new ItalianFactory;
		$car = $factory->create(FactoryMethod::FAST, 'blue');
		$car2 = $factory->create(FactoryMethod::CHEAP, 'green');

		$this->assertInstanceOf(Ferrari::class, $car);
		$this->assertInstanceOf(Mehran::class, $car2);
	}

	
	public function testUnknownType()
	{
		$this->expectException(\InvalidArgumentException::class);
		(new ItalianFactory)->create('spaceship', 'white');
	}
}