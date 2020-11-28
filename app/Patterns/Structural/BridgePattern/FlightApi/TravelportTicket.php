<?php namespace App\Patterns\Structural\BridgePattern\FlightApi;

class TravelportTicket extends AbstractFlightTicket {
  public function view(): string
  {
    return "
    {$this->flightRenderer->renderID(1)} 
    {$this->flightRenderer->renderTitle('TICKETING WITH TRAVELPORT')}
    {$this->flightRenderer->renderOrigin('KUL')} - {$this->flightRenderer->renderDestination('LBU')}";
  }
}