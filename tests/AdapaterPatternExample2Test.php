<?php

use PHPUnit\Framework\TestCase;
use App\Patterns\Structural\AdapterPattern\KidsAdapter;
use App\Patterns\Structural\AdapterPattern\Men;

use App\Patterns\Structural\AdapterPattern\AdapterPatternExample2\{
  IOSOperatingSystem,
  LinuxOperatingSystemAdapter,
  Operator
};

class AdapterPatternExample2Test extends TestCase {

  public function testOperatorCanStartAndShutdownLinuxOperatingSystem() {
    $linux = new LinuxOperatingSystemAdapter;

    $operator = new Operator($linux);
    $operator->shutdown();
    $statusAfterShutdown = $operator->getStatus();
    $operator->start();

    $this->assertEquals(LinuxOperatingSystemAdapter::SHUT_DOWN, $statusAfterShutdown);
    $this->assertEquals(LinuxOperatingSystemAdapter::START, $operator->getStatus());
  }
  
  public function testOperatorCanStartAndShutdownIOSOperatingSystem() {
    $ios = new IOSOperatingSystem;

    $operator = new Operator($ios);
    $operator->shutdown();
    $statusAfterShutdown = $operator->getStatus();
    $operator->start();

    $this->assertEquals(IOSOperatingSystem::SHUT_DOWN, $statusAfterShutdown);
    $this->assertEquals(IOSOperatingSystem::START, $operator->getStatus());
  }
}
