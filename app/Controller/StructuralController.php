<?php

namespace App\Controller;

class StructuralController {

    public function humanAdapter()
    {
        (new \App\Patterns\Structural\AdapterPattern\Human\Application)->render();
    }

    public function osAdapter()
    {
        (new \App\Patterns\Structural\AdapterPattern\OperatingSystems\Application)->render();
    }

    public function facadeQuickbooks()
    {
        (new \App\Patterns\Structural\Facade\Quickbooks\Application)->render();
    }

    public function bridgeFlights()
    {
        (new \App\Patterns\Structural\BridgePattern\FlightApi\Application)->render();
    }

    public function compositeForm()
    {
        (new \App\Patterns\Structural\CompositePattern\Form\Application)->run();
    }
    
    public function decoratorActiveRecord()
    {
        (new \App\Patterns\Structural\DecoratorPattern\ActiveRecord\Application)->run();
    }
    
    public function proxy()
    {
        (new \App\Patterns\Structural\ProxyPattern\FileReader\Application)->run();
    }
    
}
