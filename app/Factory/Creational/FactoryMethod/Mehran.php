<?php namespace App\Factory\Creational\FactoryMethod;

class Mehran implements VehicleInterface {
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
	public function __construct($color = 'black')
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