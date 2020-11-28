<?php namespace App\Patterns\Structural\AdapterPattern\AdapterPatternExample2;

class LinuxOperatingSystem {
  protected $_command = null;

  public function __construct(string $defaultCommand = null)
  {
    $this->_command = $defaultCommand;
  }
  /**
  * considering "switchOff" as the functionality name for the IOS Operating system 
  *
  * @param null
  * @return void
  */
  public function runCommand(string $command): void
  {
    $this->_command = $command;
  }
  /**
  * get command
  *
  * @param null
  * @return string
  */
  public function getCommand()
  {
    return $this->_command;
  }
}