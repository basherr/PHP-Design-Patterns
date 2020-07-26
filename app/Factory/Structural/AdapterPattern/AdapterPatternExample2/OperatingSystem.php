<?php namespace App\Factory\Structural\AdapterPattern\AdapterPatternExample2;

interface OperatingSystem {
  public function shutdown();

  public function start();
}