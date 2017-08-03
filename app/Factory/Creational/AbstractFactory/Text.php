<?php namespace App\Factory\Creational\AbstractFactory;

abstract class Text {
	private $text;
	/*
	* Set Text
	*
	* @param null
	* @return null
	*/
	public function __construct($text)
	{
		$this->text = $text;
	}
}