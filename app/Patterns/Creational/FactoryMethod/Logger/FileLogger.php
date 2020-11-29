<?php namespace App\Patterns\Creational\FactoryMethod\Logger;

class FileLogger implements Logger {

  private $filePath;

  public function __construct(string $filePath)
  {
    $this->filePath = $filePath;
  }
  /**
  * log to be printed on the screen
  *
  * @param null
  * @return void
  */
  public function log(string $message)
  {
    file_put_contents($this->filePath, $message);
  }
}