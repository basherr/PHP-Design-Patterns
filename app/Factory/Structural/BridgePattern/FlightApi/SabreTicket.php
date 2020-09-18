<?php namespace App\Factory\Structural\BridgePattern\FlightApi;

class SabreTicket extends AbstractFlightTicket
{
  public function view(): string
  {
    return "
    {$this->flightRenderer->renderID(1)}
    {$this->flightRenderer->renderTitle('TICKETING WITH SABRE')}
    {$this->flightRenderer->renderOrigin('KUL')} - {$this->flightRenderer->renderDestination('LHR')}";
  }
}