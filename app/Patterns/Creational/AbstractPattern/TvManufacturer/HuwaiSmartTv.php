<?php  namespace App\Patterns\Creational\AbstractPattern\TvManufacturer;

class HuwaiSmartTv extends HuwaiTvFactory {
    /**
    * add the power option
    *
    * @param void
    * @return void
    */
    public function addPowerOption()
    {
        $option = parent::addPowerOption();
        return $option . ' and also added the voice power option to turn on and off';
    }
}