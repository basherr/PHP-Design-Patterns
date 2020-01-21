<?php namespace App\Factory\Creational\FactoryMethodExample2;

interface LoggerFactory {
  public function createLogger(): Logger;
}