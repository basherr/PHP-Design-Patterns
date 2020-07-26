<?php

namespace App\Controller;
use App\Factory\Structural\AdapterPattern\{
    Men,
    KidsAdapter
};
use App\Factory\Structural\AdapterPattern\AdapterPatternExample2\{
    IOSOperatingSystem,
    LinuxOperatingSystemAdapter,
    Operator
};

class StructuralController {

    public function adapterPattern()
    {
        $men =  new Men;
        echo $men->walk() . '<br/>';
        echo $men->speak() . '<br/>';
        $kids =  new KidsAdapter;
        echo $kids->speak() . '<br/>';
        echo $kids->walk();
    }

    public function adapterPatternExample2()
    {
        $iosOS = new IOSOperatingSystem();

        $operator = new Operator($iosOS);
        $operator->shutdown();
        echo '[[IOS status after shutdown]]: ' . $operator->getStatus();
        $operator->start();
        echo '<br/>[[IOS status after start]]: ' . $operator->getStatus();

        $linuxAdpt = new LinuxOperatingSystemAdapter();
        $operator = new Operator($linuxAdpt);
        $operator->shutdown();
        echo '<br/><br/><br/>[[Linux status after shutdown]]: ' . $operator->getStatus();
        $operator->start();
        echo '<br/>[[Linux status after start]]: ' . $operator->getStatus();
    }
}
