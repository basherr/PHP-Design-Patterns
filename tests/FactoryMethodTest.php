<?php

use PHPUnit\Framework\TestCase;
use App\Factory\Creational\FactoryMethod\ItalianFactory;
use App\Factory\Creational\FactoryMethod\FactoryMethod;
use App\Factory\Creational\FactoryMethod\GermanFactory;
use App\Factory\Creational\FactoryMethod\Suzki;
use App\Factory\Creational\FactoryMethod\Alto;
use App\Factory\Creational\FactoryMethod\Mehran;
use App\Factory\Creational\FactoryMethod\Ferrari;

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