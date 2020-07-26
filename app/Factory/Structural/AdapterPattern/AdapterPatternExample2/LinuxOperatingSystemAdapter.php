<?php namespace App\Factory\Structural\AdapterPattern\AdapterPatternExample2;

class LinuxOperatingSystemAdapter implements OperatingSystem {
  const SHUT_DOWN = 'switchOff';
  const START = 'start';
  private $_linuxOS;

  public function __construct() {
    $this->_linuxOS = new LinuxOperatingSystem();
  }
  /**
  * shutdown the operating system
  *
  * @param null
  * @return void
  */
  public function shutdown(): void
  {
    $this->_linuxOS->runCommand('shutdown');
  }
  /**
  * start the system
  *
  * @param null
  * @return void
  */
  public function start()
  {
    $this->_linuxOS->runCommand('start');
  }
  /**
  * Get the status of the operating system
  *
  * @param null
  * @return void
  */
  public function getStatus()
  {
    return $this->_linuxOS->getCommand() === 'shutdown' ? self::SHUT_DOWN : self::START;
  }
}