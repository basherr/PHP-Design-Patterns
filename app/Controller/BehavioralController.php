<?php namespace App\Controller;


class BehavioralController
{
  public function chainHttpRequests()
  {
    (new \App\Patterns\Behavioral\ChainOfResponsibility\HandleHttpRequests\Application)->render();
  }

  public function command()
  {
    $queue = \App\Patterns\Behavioral\Command\ApiScrapper\Queue::get();
    if($queue->isEmpty()) {
      $http = new \App\Patterns\Behavioral\Command\ApiScrapper\JsonApiManager;
      $queue->add(new \App\Patterns\Behavioral\Command\ApiScrapper\KlookApiScrapper($http));
    }

    $queue->work();
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
