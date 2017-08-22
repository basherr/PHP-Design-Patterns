<?php

namespace App\Controller;

use App\Factory\Creational\AbstractFactory\JsonFactory;
use App\Factory\Creational\AbstractFactory\HtmlFactory;
use App\Factory\Creational\BuilderFactory\MealBuilder;
use App\Factory\Creational\FactoryMethod\GermanFactory;
use App\Factory\Creational\Pool\WorkerPool;

class CreationalController
{
	/*
	* Index
	*
	* @param null
	* @return null
	*/
	public function abstractFactory()
	{
		$factory = new HtmlFactory();
		$p = '<p style="display: inline;">A quick brown fox jumps over the lazy dog</p>';
		$obj = $factory->createText($p);
		echo '<b>html string</b>: ' . $obj->render() . '<br/>';
		$p  = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
		$factory = new JsonFactory();
		$obj = $factory->createText($p);
		echo '<b>json string</b>: ' . $obj->render();
	}
	/*
	* Builder
	*
	* @param null
	* @return null
	*/
	public function builderFactory()
	{
		$builder = new MealBuilder;
		$meal = $builder->prepareVegitable();
		$meal->showItems();
		echo '<pre>meal cost is : ' . $meal->getCost();
		$meal->forget();
	}
	/*
	* simple factory or factory method
	*
	* @param null
	* @return null
	*/
	public function factoryMethod()
	{
		$factory = new GermanFactory;
		$vehicle = $factory->create('fast', 'blue');

		echo '<pre> class : ' . get_class($vehicle);
		echo '<pre> color : ' . $vehicle->getColor();
	}
	/*
	* Pool
	*
	* @param null
	* @return null
	*/
	public function pool()
	{
		$pool = new WorkerPool;
		$worker = $pool->get();

		echo ' Reverse the following string by worker: do some job = ' . $worker->run('do some job');
	}
}