<?php namespace App\Patterns\Structural\AdapterPattern\Human;

class Application
{
    public function render()
    {
        $men =  new Men;
        echo $men->walk() . '<br/>';
        echo $men->speak() . '<br/>';

        $kids =  new KidsAdapter;
        echo $kids->walk();
        echo $kids->speak() . '<br/>';
    }
}