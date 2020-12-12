<?php namespace App\Patterns\Creational\Builder\Resturant;

interface Item {
	public function name(): string;
	public function packing() : Packing;
	public function price() : float;
}