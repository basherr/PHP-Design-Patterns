<?php namespace App\Patterns\Creational\FactoryMethod\CarManufacturer;

class Application
{
    public function render()
    {
        $factory = new GermanFactory;
		$vehicle = $factory->create('fast', 'blue');

        echo '<h1>Manufacturing German Fast Cars</h1>';
		echo '<pre> car : ' . (new \ReflectionClass(get_class($vehicle)))->getShortName();
        echo '<pre> color : ' . $vehicle->getColor();
        
        $factory = new ItalianFactory;
		$vehicle = $factory->create('cheap', 'red');

        echo '<h1>Manufacturing Italian Cheap Cars</h1>';
		echo '<pre> car : ' . (new \ReflectionClass(get_class($vehicle)))->getShortName();
		echo '<pre> color : ' . $vehicle->getColor();
    }
}