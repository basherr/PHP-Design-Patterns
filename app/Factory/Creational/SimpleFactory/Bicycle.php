<?php

namespace App\Factory\Creational\SimpleFactory;

class Bicycle
{
  public function driveTo(string $destination)
  {
      echo "driving to {$destination}";
  }
}
