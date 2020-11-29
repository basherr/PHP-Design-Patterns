<?php  namespace App\Patterns\Creational\AbstractPattern\TvManufacturer;

class Application
{
    public function render()
    {
        $factory = new TvFactory();
        $sonyTv = $factory->createSonyTv('lcd');

        echo '<h1>Creating Sony Lcd Tv</h1>';
        echo '<pre>'. $sonyTv->addScreen();
        echo '<pre>'. $sonyTv->addPowerOption();
        echo '<pre>'. $sonyTv->make();

        $huwaiTv = $factory->createHuwaiTv('led');

        echo '<h1>Creating Huwai Led Tv</h1>';
        echo '<pre>'. $huwaiTv->addScreen();
        echo '<pre>'. $huwaiTv->addPowerOption();
        echo '<pre>'. $huwaiTv->make();
    }
}