<?php namespace App\Patterns\Creational\Prototype\AcmePrototype;

class Application
{
    public function render()
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
}