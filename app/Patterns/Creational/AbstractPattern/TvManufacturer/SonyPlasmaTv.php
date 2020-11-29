<?php  namespace App\Patterns\Creational\AbstractPattern\TvManufacturer;

class SonyPlasmaTv extends SonyTvFactory {
    /**
    * add the screen
    *
    * @param void
    * @return void
    */
    public function addScreen()
    {
        return 'added the plasma screen';
    }
}