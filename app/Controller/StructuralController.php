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

    public function facade()
    {
        $facade = new \App\Patterns\Structural\Facade\Quickbooks\QuickbooksFacade('test123');
        
        $response = $facade->createItem(['name' => 'cement', 'costcode' => 'ABE-222']);
        
        if(!$response) {
            throw new \Exception('item could not be created');
        }
        echo "<br/>item has been creatd successfully!";
        
        $item = $facade->showItem(0);
        echo "<br/>Item name: {$item['name']} <br/> Costcode: {$item['costcode']}";

        $updatdItem = ['name' => 'cement', 'costcode' => 'ABE-223'];
        $facade->updateItem(0, $updatdItem);
        echo "<br/>Item '0' has been successfully updated<br/>";

        $facade->showItem(0);
        echo "<br/>Item name: {$updatdItem['name']} <br/> Costcode: {$updatdItem['costcode']}";

        $facade->deleteItem(0);
        echo "<br/>Item '0' has been successfully deleted<br/>";
    }

    public function bridgeFlights()
    {
        (new \App\Patterns\Structural\BridgePattern\FlightApi\Application)->render();
    }

    public function compositeForm()
    {
        (new \App\Patterns\Structural\CompositePattern\Form\Application)->run();
    }
    
    public function decorator()
    {
        (new \App\Patterns\Structural\DecoratorPattern\ActiveRecord\Application)->run();
    }
    
    public function proxy()
    {
        (new \App\Patterns\Structural\ProxyPattern\FileReader\Application)->run();
    }
    
}
