<?php  namespace App\Patterns\Creational\AbstractPattern\TvManufacturer;

class SonyLcdTv extends SonyTvFactory {
    /**
    * add the screen
    *
    * @param void
    * @return void
    */
    public function addScreen()
    {
        return 'added the lcd screen';
    }
}