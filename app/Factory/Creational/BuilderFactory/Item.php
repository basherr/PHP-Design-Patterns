<?php namespace App\Factory\Creational\BuilderFactory;

interface Item {
	public function name();
	public function packing() : Packing;
	public function price() : float;
}