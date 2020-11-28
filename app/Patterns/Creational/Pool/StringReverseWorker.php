<?php namespace App\Patterns\Creational\Pool;

class StringReverseWorker extends WorkerPool {
	/**
	* @var \DateTime
	*/
	private $created_at;
	/*
	* Constructor
	*
	* @param null
	* @return null
	*/
	public function __construct() {
		$this->created_at = new \DateTime; 
	}
	/*
	* Run
	*
	* @param null
	* @return null
	*/
	public function run(string $text)
	{
		return strrev($text);
	}
}