<?php

namespace App\Factory\Creational\SimpleFactory;

class Bicycle
{
  public function driveTo(string $destination)
  {
    return "driving to {$destination}";
  }
}
