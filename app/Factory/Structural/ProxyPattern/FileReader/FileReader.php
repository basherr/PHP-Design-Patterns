<?php namespace App\Factory\Structural\ProxyPattern\FileReader;

interface FileReader
{
  public function getFileSize(): int;
  public function isWritable(): bool;
  public function isReadable(): bool;
  public function getContent();
}