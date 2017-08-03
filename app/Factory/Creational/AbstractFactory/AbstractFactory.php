<?php namespace App\Factory\Creational\AbstractFactory;

abstract class AbstractFactory {
	public abstract function createText(string $content) : Text;
}