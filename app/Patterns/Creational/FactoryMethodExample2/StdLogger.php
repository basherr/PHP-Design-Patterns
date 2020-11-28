<?php namespace App\Patterns\Creational\FactoryMethodExample2;

class StdLogger implements Logger {
  /**
  * log to be printed on the screen
  *
  * @param null
  * @return void
  */
  public function log(string $message)
  {
    echo $message;
  }
}