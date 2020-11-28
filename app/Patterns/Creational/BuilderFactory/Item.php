<?php namespace App\Patterns\Creational\BuilderFactory;

interface Item {
	public function name();
	public function packing() : Packing;
	public function price() : float;
}