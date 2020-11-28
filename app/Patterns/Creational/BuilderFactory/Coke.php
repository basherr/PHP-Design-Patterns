<?php namespace App\Patterns\Creational\BuilderFactory;

class Coke extends ColdDrink {
	/*
	* Price
	*
	* @param null
	* @return null
	*/
	public function price() : float
	{
		return '20.00';
	}
	/*
	* Name
	*
	* @param null
	* @return null
	*/
	public function name() : string
	{
		return 'Coke';
	}
}