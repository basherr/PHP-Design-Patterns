<?php

use PHPUnit\Framework\TestCase;
use App\Patterns\Creational\BuilderFactory\Meal;
use App\Patterns\Creational\BuilderFactory\MealBuilder;
use App\Patterns\Creational\BuilderFactory\Packing;
use App\Patterns\Creational\BuilderFactory\VegitableBurger;
use App\Patterns\Creational\BuilderFactory\ChickenBurger;
use App\Patterns\Creational\BuilderFactory\Item;
use App\Patterns\Creational\BuilderFactory\Coke;
// example 2 of builderfactory
use App\Patterns\Creational\BuilderFactory\BuilderFactoryExample2\DatabaseQueryBuilder;

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
	public function testMealBuilderCanCreateColdDrinks()
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
	
	public function testUserCanConnectToAnyDatabase()
	{
		$connection = 'mysql';
		$builder = new DatabaseQueryBuilder($connection);
		$postgresConnection = 'postgres';
		$postgresBuilder = new DatabaseQueryBuilder($postgresConnection);
		
		$this->assertEquals($connection, $builder->getDB()->getConnection());
		$this->assertEquals($postgresConnection, $postgresBuilder->getDB()->getConnection());
	}

	public function testUserCanDisconnectAndReconnectToTheDatabase()
	{
		$connection = 'mysql';
		$builder = new DatabaseQueryBuilder($connection);

		$builder->getDB()->disconnect()->connect();
		$this->assertEquals($connection, $builder->getDB()->getConnection());
	}

	public function testUserCanQueryFroMysqlDatabase()
	{
		$connection = 'mysql';
		$builder = new DatabaseQueryBuilder($connection);

		$query = $builder->select('users', ['user_id', 'user_name'])
								->where('UserName = :userName', [':userName' => 'bsr.anwar'])
								->get();
		$this->assertEquals('SELECT user_id,user_name FROM `users` WHERE UserName = bsr.anwar', $query);
	}

	public function testUserCanQueryFromPostgresDatabase()
	{
		$connection = 'postgres';
		$builder = new DatabaseQueryBuilder($connection);

		$query = $builder->select('users', ['user_id', 'user_name'])
								->where('UserName = :userName', [':userName' => 'khan'])
								->limit(0, 10)
								->get();
		$this->assertEquals('SELECT user_id,user_name FROM `users` WHERE UserName = khan LIMIT 0,10', $query);
	}

	public function testUserCanNotUseLimitWithMysqlQuery()
	{
		$this->expectException(\BadMethodCallException::class);
		$connection = 'mysql';
		$builder = new DatabaseQueryBuilder($connection);

		$builder->select('users', ['user_id', 'user_name'])
								->where('UserName = :userName', [':userName' => 'khan'])
								->limit(0, 10)
								->get();
	}
}