<?php namespace App\Patterns\Creational\Builder\Resturant;

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