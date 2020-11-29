<?php namespace App\Patterns\Creational\FactoryMethod\CarManufacturer;

interface VehicleInterface {
	public function setColor(string $color);
	public function getColor() : string;
}