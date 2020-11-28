<?php namespace App\Patterns\Creational\BuilderFactory;

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