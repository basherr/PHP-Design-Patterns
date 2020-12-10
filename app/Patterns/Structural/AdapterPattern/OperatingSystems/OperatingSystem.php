<?php namespace App\Patterns\Structural\AdapterPattern\OperatingSystems;

interface OperatingSystem {
  public function shutdown();

  public function start();
}