<?php namespace App\Patterns\Creational\FactoryMethodExample2;

interface LoggerFactory {
  public function createLogger(): Logger;
}