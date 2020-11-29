<?php  namespace App\Patterns\Creational\AbstractPattern\TvManufacturer;

abstract class SonyTvFactory implements Television {
    use TvHelper;
    /**
    * add the screen
    *
    * @param void
    * @return void
    */
    public function addScreen()
    {
        return 'added the default sony plastic screen';
    }
    /**
    * add the power option
    *
    * @param void
    * @return void
    */
    public function addPowerOption()
    {
        return 'added the power button option to turn on and off';
    }
    /**
    * make the tv
    *
    * @param void
    * @return string
    */
    public function make(): string
    {
        $this->addPowerOption();
        $this->addScreen();
        return implode(' ', $this->splitStudlyCaseToArr($this->getCalledClassName())) . ' is ready to be shipped';
    }
}