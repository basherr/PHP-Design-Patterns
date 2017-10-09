<?php

namespace App\Controller;
use App\Factory\Structural\AdapterPattern\Men;
use App\Factory\Structural\AdapterPattern\KidsAdapter;

class StructuralController {

    public function adapterPattern()
    {
          $men =  new Men;
          echo $men->walk() . '<br/>';
          echo $men->speak() . '<br/>';
          $kids =  new KidsAdapter;
          echo $kids->speak() . '<br/>';
          echo $kids->walk();
    }
}
