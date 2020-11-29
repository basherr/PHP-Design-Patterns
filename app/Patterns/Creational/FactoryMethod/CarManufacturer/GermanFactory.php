<?php namespace App\Patterns\Creational\FactoryMethod\CarManufacturer;

class GermanFactory extends FactoryMethod {
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
				return new Suzki($color);
				break;
			case parent::FAST:
				return new Alto($color);
				break;
			default:
				throw new \InvalidArgumentException("{$type} is not a valid vehicle");
				break;
		}
	}
}