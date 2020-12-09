<?php namespace App\Patterns\Creational\Prototype\AcmePrototype;

abstract class IAcmePrototype {
	/**
	 * @var id
	 */
	protected $id;
	/**
	 * @var name
	 */
	protected $name;
	/**
	 * @var department
	 */
	protected $department;

	abstract function setDept(int $orgCode);
	abstract function getDept() : string;

	/*
	* Set name
	*
	* @param null
	* @return null
	*/
	public function setName($name)
	{
		$this->name = $name;
	}
	/*
	* Get name
	*
	* @param null
	* @return null
	*/
	public function getName()
	{
		return $this->name;
	}
	/*
	* Set Id
	*
	* @param null
	* @return null
	*/
	public function setId($id)
	{
		$this->id = $id;
	}
	/*
	* Get id
	*
	* @param null
	* @return null
	*/
	public function getId()
	{
		return $this->id;
	}
	/*
	* Clone
	*
	* @param null
	* @return null
	*/
	abstract function __clone();
}