<?php

use PHPUnit\Framework\TestCase;

class ProxyPatternTest extends TestCase {
  private $filePath = __DIR__ . '/../app/Factory/Structural/ProxyPattern/FileReader/data.json';

  public function testCanReadReadableFile()
  {
    $fileReader = new App\Factory\Structural\ProxyPattern\FileReader\JsonFileReaderProxy($this->filePath);

    $this->assertTrue($fileReader->isReadable());
  }

  public function testCanReadFileContent()
  {
    $fileReader = new App\Factory\Structural\ProxyPattern\FileReader\JsonFileReaderProxy($this->filePath);

    $this->assertEquals($fileReader->getContent(), new \stdClass);
  }
}