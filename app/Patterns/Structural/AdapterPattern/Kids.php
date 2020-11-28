<?php

namespace App\Patterns\Structural\AdapterPattern;

class Kids {

    public function move() : string
    {
       return "Kids can move but can't walk";
    }

    public function SmileOrWeep() : string
    {
      return "Kids can smile or weep";
    }

}
