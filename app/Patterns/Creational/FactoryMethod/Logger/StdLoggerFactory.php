<?php namespace App\Patterns\Creational\FactoryMethod\Logger;

class StdLoggerFactory implements LoggerFactory {
  /**
  * log to be printed on the screen
  *
  * @param null
  * @return void
  */
  public function createLogger(): Logger
  {
    return new StdLogger();
  }
}