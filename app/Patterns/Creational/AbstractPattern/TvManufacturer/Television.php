<?php  namespace App\Patterns\Creational\AbstractPattern\TvManufacturer;

interface Television {
    /**
    * tv has a screen
    *
    * @param void
    * @return void
    */
    public function addScreen();
    /*
	* tv has power option to turn on or off
	*
	* @param void
	* @return void
	*/
    public function addPowerOption();
    /**
    * create tv
    *
    * @param void
    * @return void
    */
    public function make(): string;
}