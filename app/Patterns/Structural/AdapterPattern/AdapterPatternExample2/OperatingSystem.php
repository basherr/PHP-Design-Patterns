<?php namespace App\Patterns\Structural\AdapterPattern\AdapterPatternExample2;

interface OperatingSystem {
  public function shutdown();

  public function start();
}