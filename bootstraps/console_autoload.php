<?php

require __DIR__ . '/../vendor/autoload.php';

if(isset($argv[1]) && $argv[1] === 'test') {
  if(!isset($argv[2])) {
    throw new \Exception('class name is required to create a test');
  }

  (new \App\Commands\CreateTestFileCommand($argv[2]))->handle();
}