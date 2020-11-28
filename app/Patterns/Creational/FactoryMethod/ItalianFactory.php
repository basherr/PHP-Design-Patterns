<?php namespace App\Patterns\Creational\FactoryMethod;

class ItalianFactory extends FactoryMethod {
	/*
	* Create Vehicle
	*
	* @param null
	* @return null
	*/
	public function create(string $type, string $color) : VehicleInterface
	{
		switch ($type) {
			case parent::CHEAP:
				return new Mehran($color);
				break;
			case parent::FAST:
				return new Ferrari($color);
				break;
			default:
				throw new \InvalidArgumentException("{$type} is not a valid vehicle");
				break;
		}
	}
}