<?php

use PHPUnit\Framework\TestCase;
use App\Factory\Creational\BuilderFactory\Meal;
use App\Factory\Creational\BuilderFactory\MealBuilder;
use App\Factory\Creational\BuilderFactory\Packing;
use App\Factory\Creational\BuilderFactory\VegitableBurger;
use App\Factory\Creational\BuilderFactory\ChickenBurger;
use App\Factory\Creational\BuilderFactory\Item;
use App\Factory\Creational\BuilderFactory\Coke;

class BuilderFactoryTest extends TestCase {
	
	public function testItemCanBeAddedToMeal()
	{
		$meal = new Meal();
		$meal->addItem(new ChickenBurger());

		$this->assertInstanceOf(Item::class, $meal->first());
		$meal->forget();
	}
	/**
	* @depends testItemCanBeAddedToMeal
	*/
	public function testMealBuilderCanCreateVegitableBurger() 
	{
		$builder = new MealBuilder;
		$meal = $builder->prepareVegitable();
		
		$this->assertInstanceOf(Meal::class, $meal);
		$this->assertInstanceOf(VegitableBurger::class, $meal->first());
		$this->assertInstanceOf(Packing::class, $meal->first()->packing());

		$this->assertEquals('100.20', $meal->first()->price());
		$this->assertEquals('Vegitable Burger', $meal->first()->name());
		$this->assertEquals('Wrapper', $meal->first()->packing()->pack());
	}
	/**
	* @depends testItemCanBeAddedToMeal
	*/
	public function testMealBuilderCanCreateNonVegitableBurger()
	{
		$builder = new MealBuilder;
		$meal = $builder->prepareNonVegitable();

		$this->assertInstanceOf(Meal::class, $meal);
		$this->assertInstanceOf(ChickenBurger::class, $meal->first());
		$this->assertInstanceOf(Packing::class, $meal->first()->packing());

		$this->assertEquals('140.00', $meal->first()->price());
		$this->assertEquals('Chicken Burger', $meal->first()->name());
		$this->assertEquals('Wrapper', $meal->first()->packing()->pack());
	}
	/**
	* @depends testItemCanBeAddedToMeal
	*/
	public function testMealCanCreateColdDrinks()
	{
		$builder = new MealBuilder;
		$meal = $builder->prepareVegitable();

		$this->assertInstanceOf(Meal::class, $meal);
		$this->assertInstanceOf(Coke::class, $meal->last());
		$this->assertInstanceOf(Packing::class, $meal->last()->packing());

		$this->assertEquals('20.00', $meal->last()->price());
		$this->assertEquals('Coke', $meal->last()->name());
		$this->assertEquals('Bottle', $meal->last()->packing()->pack());
	}
}