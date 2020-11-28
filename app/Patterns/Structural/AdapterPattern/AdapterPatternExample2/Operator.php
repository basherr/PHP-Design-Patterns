<?php namespace App\Patterns\Structural\AdapterPattern\AdapterPatternExample2;

class Operator {
  private $_os;

  public function __construct(OperatingSystem $operatingSystem) {
    $this->_os = $operatingSystem;
  }
  /**
  * start the system
  *
  * @param null
  * @return void
  */
  public function start()
  {
    return $this->_os->start();
  }
  /**
  * shutdown the system
  *
  * @param null
  * @return void
  */
  public function shutdown()
  {
    return $this->_os->shutdown();
  }
  /**
  * get status of the operating system
  *
  * @param null
  * @return void
  */
  public function getStatus()
  {
    return $this->_os->getStatus();
  }
}