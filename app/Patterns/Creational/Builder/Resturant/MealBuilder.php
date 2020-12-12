<?php namespace App\Patterns\Creational\Builder\Resturant;

class MealBuilder {
	/*
	* Prepare Vegetable Meal
	*
	* @param null
	* @return null
	*/
	public function prepareVegitable()
	{
		$meal = new Meal;
		$meal->addItem(new VegitableBurger());
		$meal->addItem(new Coke());
		return $meal;
	}
	/*
	* Prepare Non VegitableBurger
	*
	* @param null
	* @return null
	*/
	public function prepareNonVegitable()
	{
		$meal = new Meal;
		$meal->addItem(new ChickenBurger());
		$meal->addItem(new Pepsi());
		return $meal;
	}
}