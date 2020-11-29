<?php  namespace App\Patterns\Creational\AbstractPattern\TvManufacturer;

class TvFactory {
    /**
    * create sony tv
    *
    * @param void
    * @return void
    */
    public function createSonyTv($type): Television {
        if($type === 'lcd') {
            return new SonyLcdTv;
        }
        if ($type === 'plasma') {
            return new SonyPlasmaTv;
        }
        throw new \Exception("{$type} is not defined");
    }
    /**
    * create huwai tv
    *
    * @param void
    * @return void
    */
    public function createHuwaiTv($type): Television {
        if($type === 'led') {
            return new HuwaiLedTv;
        }
        if ($type === 'smart') {
            return new HuwaiSmartTv;
        }
        throw new \Exception("{$type} is not defined");
    }
}