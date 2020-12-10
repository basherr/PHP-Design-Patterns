<?php namespace App\Patterns\Structural\AdapterPattern\OperatingSystems;

class IOSOperatingSystem implements OperatingSystem {
  const SHUT_DOWN = 'shutdown';
  const START = 'start';
  protected $_status = null;

  public function __construct(string $status = null)
  {
    $this->_status = $status;
  }
  /**
  * shutdown the operating system
  *
  * @param null
  * @return void
  */
  public function shutdown(): void
  {
    $this->_status = self::SHUT_DOWN;
  }
  /**
  * start the system
  *
  * @param null
  * @return void
  */
  public function start()
  {
    $this->_status = self::START;
  }
  /**
  * Get the status of the operating system
  *
  * @param null
  * @return void
  */
  public function getStatus()
  {
    return $this->_status;
  }
}