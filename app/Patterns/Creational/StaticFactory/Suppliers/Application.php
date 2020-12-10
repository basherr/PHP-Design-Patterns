<?php namespace App\Patterns\Creational\StaticFactory\Suppliers;

class Application
{
    public function render()
    {
        $supplier = FlightSupplierFactory::get(1);
		echo $supplier->request('My booking was cancelled without prior notification') . "<br/><br/>";
		
		$supplier = FlightSupplierFactory::get(2);
		echo $supplier->request('Please book a ticket for me');
    }
}