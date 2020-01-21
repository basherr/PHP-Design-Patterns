<?php

use PHPUnit\Framework\TestCase;
use App\Factory\Creational\FactoryMethodExample2\{
  StdLogger,
  FileLogger,
	FileLoggerFactory,
	StdLoggerFactory
};

class FactoryMethod2Test extends TestCase
{
  public function testCanWriteLogToStd()
  {
    $logger = (new StdLoggerFactory)->createLogger();
    $logger->log('Test text');

    $this->expectOutputString('Test text');
    $this->assertInstanceOf(StdLogger::class, $logger);
  }
  
  public function testCanWriteLogToFile()
  {
    $expectedString = 'Test Factory';
    $file = __DIR__ . '/factory.txt';
    $logger = (new FileLoggerFactory($file))->createLogger();
    $logger->log($expectedString);
    
    $this->assertInstanceOf(FileLogger::class, $logger);
    $this->assertTrue(file_exists($file));
    $content = file_get_contents($file);
    $this->assertEquals($content, $expectedString);
  }
}