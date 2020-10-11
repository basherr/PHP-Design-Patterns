<?php namespace App\Factory\Structural\ProxyPattern\FileReader;

class JsonFileReaderProxy implements FileReader
{
  private $_file = null;
  private $_path = null;

  public function __construct(string $path)
  {
    $this->_file = null;
    $this->_path = $path;
  }

  public function getContent()
  {
    $this->loadFile();
    return $this->_file->getContent();
  }

  public function getFileSize(): int
  {
    $this->loadFile();
    return $this->_file->getFileSize();
  }

  public function isWritable(): bool
  {
    $this->loadFile();
    return $this->_file->isWritable();
  }
  
  public function isReadable(): bool
  {
    $this->loadFile();
    return $this->_file->isReadable();
  }

  private function loadFile()
  {
    if($this->_file === null) {
      $this->_file = new JsonFileReader($this->_path);
    }
  }
}