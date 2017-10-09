<?php

namespace App\Controller;

use App\Factory\Creational\Pool\WorkerPool;
use App\Factory\Creational\AbstractFactory\JsonFactory;
use App\Factory\Creational\AbstractFactory\HtmlFactory;
use App\Factory\Creational\BuilderFactory\MealBuilder;
use App\Factory\Creational\FactoryMethod\GermanFactory;
use App\Factory\Creational\Prototype\IAcmePrototype;
use App\Factory\Creational\Prototype\Marketing;
use App\Factory\Creational\Prototype\Engineering;
use App\Factory\Creational\Prototype\Management;
use App\Factory\Creational\SimpleFactory\SimpleFactory;

class CreationalController
{
	/*
	* Index
	*
	* @param null
	* @return null
	*/
	public function abstractFactory()
	{
		$factory = new HtmlFactory();
		$p = '<p style="display: inline;">A quick brown fox jumps over the lazy dog</p>';
		$obj = $factory->createText($p);
		echo '<b>html string</b>: ' . $obj->render() . '<br/>';
		$p  = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
		$factory = new JsonFactory();
		$obj = $factory->createText($p);
		echo '<b>json string</b>: ' . $obj->render();
	}
	/*
	* Builder
	*
	* @param null
	* @return null
	*/
	public function builderFactory()
	{
		$builder = new MealBuilder;
		$meal = $builder->prepareVegitable();
		$meal->showItems();
		echo '<pre>meal cost is : ' . $meal->getCost();
		$meal->forget();
	}
	/*
	* simple factory or factory method
	*
	* @param null
	* @return null
	*/
	public function factoryMethod()
	{
		$factory = new GermanFactory;
		$vehicle = $factory->create('fast', 'blue');

		echo '<pre> class : ' . get_class($vehicle);
		echo '<pre> color : ' . $vehicle->getColor();
	}
	/*
	* Pool
	*
	* @param null
	* @return null
	*/
	public function pool()
	{
		$pool = new WorkerPool;
		$worker = $pool->get();

		echo ' Reverse the following string by worker: do some job = ' . $worker->run('do some job');
	}
	/*
	* Prototype
	*
	* @param null
	* @return null
	*/
	public function prototype()
	{
				$marketing = new Marketing();
        $management = new Management();
        $engineering = new Engineering();

        $smith = clone $marketing;
        $this->setEmployee( $smith, "Tess Smith", 101, "ts101-1234");
        $this->showEmployee($smith);

        $jacob = clone $marketing;
        $this->setEmployee( $jacob,"Jacob Jones", 102,"jj101-2234");
        $this->showEmployee($jacob);

        $ricky = clone $management;
        $this->setEmployee($ricky,"Ricky Rodriguez", 203,"rr203-5634");
        $this->showEmployee($ricky);

        $livia = clone $engineering;
        $this->setEmployee($livia,"Olivia Perez", 302,"op301-1278");
        $this->showEmployee($livia);

        $jhon = clone $engineering;
        $this->setEmployee($jhon,"John Jackson", 301, "jj302-1454");
        $this->showEmployee($jhon);
	}

    private function showEmployee(IAcmePrototype $employee)
    {
        echo $employee->getName() . "<br/>";
        echo $employee->getDept() . ": " . $employee::UNIT . "<br/>";
        echo $employee->getID() . "<p/>";
    }

    private function setEmployee(IAcmePrototype $employee,$nm,$dp,$id)
    {
        $employee->setName($nm);
        $employee->setDept($dp);
        $employee->setID($id);
    }

		public function simpleFactory()
		{
				$factory = new SimpleFactory;
				$bicycle = $factory->createBicycle();
				echo $bicycle->driveTo('Austin Texas');
		}
}
