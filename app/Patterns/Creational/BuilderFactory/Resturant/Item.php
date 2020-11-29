<?php namespace App\Patterns\Creational\BuilderFactory\Resturant;

interface Item {
	public function name(): string;
	public function packing() : Packing;
	public function price() : float;
}