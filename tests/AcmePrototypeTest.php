<?php

use PHPUnit\Framework\TestCase;

use App\Patterns\Creational\Prototype\AcmePrototype\IAcmePrototype;
use App\Patterns\Creational\Prototype\AcmePrototype\Marketing;

class AcmePrototypeTest extends TestCase {

    public function testShouldCloneProperly()
    {
        $marketing = new Marketing();

		$smith = clone $marketing;
		$this->setEmployee( $smith, "Tess Smith", 101, "ts101-1234");
		
		$jacob = clone $marketing;
		$this->setEmployee( $jacob,"Jacob Jones", 102,"jj101-2234");

		$this->assertEquals("Jacob Jones", $jacob->getName());
		$this->assertEquals("Tess Smith", $smith->getName());
    }

    private function setEmployee(IAcmePrototype $employee,$nm,$dp,$id)
	{
		$employee->setName($nm);
		$employee->setDept($dp);
		$employee->setID($id);
	}
}