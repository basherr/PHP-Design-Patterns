<?php namespace App\Factory\Creational\FactoryMethod;

abstract class FactoryMethod {
	const FAST = 'fast';
	const CHEAP = 'cheap';

	abstract public function create(string $type, string $color) : VehicleInterface;
}