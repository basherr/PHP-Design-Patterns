<?php namespace App\Patterns\Creational\BuilderFactory;

class Wrapper implements Packing {
	/*
	* Pack
	*
	* @param null
	* @return null
	*/
	public function pack() : string
	{
		return 'Wrapper';
	}
}