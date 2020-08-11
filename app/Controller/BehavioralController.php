<?php namespace App\Controller;


class BehavioralController
{
  public function chainOfResponsibility()
  {
    $app = new \App\Factory\Behavioral\ChainOfResponsibility\HandleHttpRequests\Application;

    $app->render();
  }
}
