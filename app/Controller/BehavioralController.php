<?php namespace App\Controller;


class BehavioralController
{
  public function chainOfResponsibility()
  {
    $app = new \App\Factory\Behavioral\ChainOfResponsibility\HandleHttpRequests\Application;

    $app->render();
  }

  public function command()
  {
    $queue = \App\Factory\Behavioral\Command\ApiScrapper\Queue::get();
    if($queue->isEmpty()) {
      $http = new \App\Factory\Behavioral\Command\ApiScrapper\JsonApiManager;
      $queue->add(new \App\Factory\Behavioral\Command\ApiScrapper\KlookApiScrapper($http));
    }

    $queue->work();
  }


  public function iterator()
  {
    // (new \App\Factory\Behavioral\Iterator\UserRoles\Application)->run();
    (new \App\Factory\Behavioral\Iterator\HotelSuppliers\Application)->run();
  }
}
