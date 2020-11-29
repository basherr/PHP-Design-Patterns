<?php namespace App\Patterns\Creational\FactoryMethod\Logger;

interface LoggerFactory {
  public function createLogger(): Logger;
}