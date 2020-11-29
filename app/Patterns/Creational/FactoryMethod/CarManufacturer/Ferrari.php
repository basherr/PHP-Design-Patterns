<?php namespace App\Patterns\Creational\FactoryMethod\CarManufacturer;

class Ferrari implements VehicleInterface {
	/**
	 * string $color
	 */
	private $color;
	/*
	* Constructor
	*
	* @param null
	* @return null
	*/
	public function __construct($color = 'red')
	{
		$this->setColor($color);
	}
	/*
	* Set Color
	*
	* @param null
	* @return null
	*/
	public function setColor(string $color)
	{
		$this->color = $color;
	}
	/*
	* Get color
	*
	* @param null
	* @return null
	*/
	public function getColor() : string
	{
		return $this->color;
	}
}