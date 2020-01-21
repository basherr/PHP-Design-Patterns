<?php namespace App\Factory\Creational\FactoryMethodExample2;

class FileLoggerFactory implements LoggerFactory {

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
  public function createLogger(): Logger
  {
    return new FileLogger($this->filePath);
  }
}