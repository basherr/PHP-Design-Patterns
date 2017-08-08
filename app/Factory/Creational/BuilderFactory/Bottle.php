<?php namespace App\Factory\Creational\BuilderFactory;

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