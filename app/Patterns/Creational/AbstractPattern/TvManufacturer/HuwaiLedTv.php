<?php  namespace App\Patterns\Creational\AbstractPattern\TvManufacturer;

class HuwaiLedTv extends HuwaiTvFactory {
    /**
    * add the screen option
    *
    * @param void
    * @return void
    */
    public function addScreen()
    {
        return 'added LED screen';
    }
}