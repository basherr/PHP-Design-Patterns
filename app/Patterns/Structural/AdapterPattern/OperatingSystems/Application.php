<?php namespace App\Patterns\Structural\AdapterPattern\OperatingSystems;

class Application
{
    public function render()
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