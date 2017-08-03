<?php namespace App\Factory\Creational\AbstractFactory;

class JsonText extends Text
{
    private $content;
	/*
	* Constructor
	*
	* @param null
	* @return null
	*/
	public function __construct($content)
	{
		$this->content = $content;
	}
	/*
	* Parse Html Entities
	*
	* @param null
	* @return null
	*/
	public function parse()
	{
		return json_decode($this->content);
	}
	/*
	* Get json textt
	*
	* @param null
	* @return null
	*/
	public function render()
	{
		return json_encode($this->content, JSON_PRETTY_PRINT);
	}
}