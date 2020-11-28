<?php namespace App\Patterns\Structural\ProxyPattern\FileReader;

class JsonFileReader implements FileReader
{
  private $_file = null;
  private $_fileSize = null;
  private $_isWritable = null;
  private $_isReadable = null;

  public function __construct(string $path)
  {
    $this->_file = \json_decode(\file_get_contents($path));
    $this->_fileSize = filesize($path);
    $this->_isWritable = is_writable($path);
    $this->_isReadable = is_readable($path);
  }

  public function getContent()
  {
    return $this->_file;
  }

  public function getFileSize(): int
  {
    return $this->_fileSize;
  }

  public function isWritable(): bool
  {
    return $this->_isWritable;
  }
  
  public function isReadable(): bool
  {
    return $this->_isReadable;
  }
}