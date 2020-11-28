<?php namespace App\Patterns\Creational\FactoryMethodExample2;

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