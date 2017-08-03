<?php namespace App\Factory\Creational\AbstractFactory;

class HtmlText extends Text
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
	public function render()
	{
		return htmlspecialchars($this->content);
	}
}