<?php namespace App\Patterns\Structural\BridgePattern\FlightApi;

class Application
{
    public function render()
    {
        $renderer = new SabreFlightRenderer;
        $sabreTicket = new SabreTicket($renderer);
        echo $sabreTicket->view();

        $renderer = new TravelportFlightRenderer;
        $travelportTicket = new TravelportTicket($renderer);
        echo $travelportTicket->view();
    }
}