<?php namespace App\Factory\Structural\ProxyPattern\FileReader;

class Application
{
  public function run()
  {
    $file = (new JsonFileReaderProxy(__DIR__ . '/data.json'));
    echo 'IsFileReadAble: ' . $file->isReadable();
    echo '<br/>File Size is: ' . $file->getFileSize() . ' KB';
    echo '<br/>Is File Writable: ' . $file->isWritable();
  }
}
