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


  public function hotelSupplierIterator()
  {
    (new \App\Patterns\Behavioral\Iterator\HotelSuppliers\Application)->render();
  }

  public function signupObservers()
  {
    (new \App\Patterns\Behavioral\Observer\NewUserSignedup\Application)->render();
  }
}
