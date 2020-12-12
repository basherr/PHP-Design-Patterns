<?php namespace App\Controller;


class BehavioralController
{
  public function chainHttpRequests()
  {
    (new \App\Patterns\Behavioral\ChainOfResponsibility\HandleHttpRequests\Application)->render();
  }

  public function commandApiScrapper()
  {
    (new \App\Patterns\Behavioral\Command\ApiScrapper\Application)->render();
  }


  public function iterator()
  {
    (new \App\Patterns\Behavioral\Iterator\HotelSuppliers\Application)->run();
  }

  public function observer()
  {
    (new \App\Patterns\Behavioral\Observer\NewUserSignedup\Application)->run();
  }
}
