<?php namespace App\Patterns\Creational\BuilderFactory\Resturant;

class ChickenBurger extends Burger {
	/*
	* Price
	*
	* @param null
	* @return null
	*/
	public function price() : float
	{
		return '140.00';
	}
	/*
	* Item Name
	*
	* @param null
	* @return null
	*/ 
	public function name() : string
	{
		return 'Chicken Burger';
	}
}