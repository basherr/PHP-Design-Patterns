<?php namespace App\Patterns\Creational\AbstractFactory;

class JsonFactory extends AbstractFactory {
	/*
	* Create JSON Text
	*
	* @param null
	* @return null
	*/
	public function createText(string $content) : Text
	{
		return new JsonText($content);
	}
}