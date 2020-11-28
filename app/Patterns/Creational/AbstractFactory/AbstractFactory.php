<?php namespace App\Patterns\Creational\AbstractFactory;

abstract class AbstractFactory {
	public abstract function createText(string $content) : Text;
}