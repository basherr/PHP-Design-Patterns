<?php namespace App\Patterns\Behavioral\Command\ApiScrapper;

class Application
{
    public function render()
    {
        $queue = Queue::get();
        if($queue->isEmpty()) {
        $http = new JsonApiManager;
            $queue->add(new KlookApiScrapper($http));
        }

        $queue->work();
    }
}