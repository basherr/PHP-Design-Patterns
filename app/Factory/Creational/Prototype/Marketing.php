<?php namespace App\Factory\Creational\Prototype;

class Marketing extends IAcmePrototype {
	const UNIT = "Marketing";
	private $sales = 'sales';
	private $promotion = 'promotion';
	private $strategic = 'strategic planning';

	/*
	* Set Department
	*
	* @param null
	* @return null
	*/
	public function setDept(int $orgCode)
	{
		switch ($orgCode) {
			case 101:
				$this->department = $this->sales;
				break;
			case 102:
				$this->department = $this->promotion;
				break;
			case 103:
				$this->department = $this->strategic;
				break;
			default:
				$this->department = "Unrecognized Marketing";
				break;
		}
	}
	/*
	* Get Department
	*
	* @param null
	* @return null
	*/
	public function getDept() : string
	{
		return $this->department;
	}

	public function __clone() {}
}