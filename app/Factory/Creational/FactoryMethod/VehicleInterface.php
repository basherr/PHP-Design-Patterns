<?php namespace App\Factory\Creational\FactoryMethod;

interface VehicleInterface {
	public function setColor(string $color);
	public function getColor() : string;
}