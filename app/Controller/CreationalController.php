<?php

namespace App\Controller;

use App\Patterns\Creational\Pool\WorkerPool;
use App\Patterns\Creational\FactoryMethod\GermanFactory;
use App\Patterns\Creational\Prototype\IAcmePrototype;
use App\Patterns\Creational\Prototype\Marketing;
use App\Patterns\Creational\Prototype\Engineering;
use App\Patterns\Creational\Prototype\Management;
use App\Patterns\Creational\SimpleFactory\SimpleFactory;
use App\Patterns\Creational\FactoryMethodExample2\{
	FileLoggerFactory,
	StdLoggerFactory
};

class CreationalController
{
	/*
	* Index
	*
	* @param null
	* @return null
	*/
	public function abstractTvFactory()
	{
		(new \App\Patterns\Creational\AbstractPattern\TvManufacturer\Application)->render();
	}
	/*
	* Builder
	*
	* @param null
	* @return null
	*/
	public function resturantBuilder()
	{
		(new \App\Patterns\Creational\BuilderFactory\Resturant\Application)->render();
	}
	/*
	* Builder
	*
	* @param null
	* @return null
	*/
	public function databaseBuilder()
	{
		(new \App\Patterns\Creational\BuilderFactory\Database\Application)->render();
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
	* simple factory or factory method
	*
	* @param null
	* @return null
	*/
	public function factoryMethod2()
	{
		$factory = new StdLoggerFactory;
		$factory->createLogger()->log('Write this message to log');

		$file = __DIR__ . '/factory.txt';
		(new FileLoggerFactory($file))->createLogger()->log('This text to be written on a file');
		echo "<br/>". \file_get_contents($file);
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

	public function staticFactory()
	{
		$supplier = \App\Patterns\Creational\StaticFactory\Suppliers\FlightSupplierFactory::get(1);
		echo $supplier->request('My booking was cancelled without prior notification') . "<br/><br/>";
		
		$supplier = \App\Patterns\Creational\StaticFactory\Suppliers\FlightSupplierFactory::get(2);
		echo $supplier->request('Please book a ticket for me');
	}
}
