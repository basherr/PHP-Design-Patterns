<?php namespace App\Patterns\Creational\BuilderFactory\Resturant;

class Bottle implements Packing {
	/*
	* Pack
	*
	* @param null
	* @return null
	*/
	public function pack(): string
	{
		return 'Bottle';
	}
}