<?php namespace App\Patterns\Creational\Builder\Resturant;

class Application
{
    public function render()
    {
        $builder = new MealBuilder;
        echo '<h1>Preparing Vegitable Meal</h1>';
		$meal = $builder->prepareVegitable();
		$meal->showItems();
		echo '<pre>meal cost is : ' . $meal->getCost();
        $meal->forget();
        
        echo '<h1>Preparing Non Vegitable Meal</h1>';
		$meal = $builder->prepareNonVegitable();
		$meal->showItems();
		echo '<pre>meal cost is : ' . $meal->getCost();
		$meal->forget();
    }
}