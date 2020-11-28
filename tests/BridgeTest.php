<?php

use PHPUnit\Framework\TestCase;
use App\Patterns\Structural\BridgePattern\FlightApi\{
  SabreTicket,
  TravelportTicket,
  SabreFlightRenderer,
  TravelportFlightRenderer
};

class BridgeTest extends TestCase {
  public function testCheckSabreTicketingView() {
    $sabreTicket = new SabreTicket(new SabreFlightRenderer);
    
    $this->assertStringContainsString('TICKETING WITH SABRE', $sabreTicket->view());
  }
  
  public function testCheckTravelportTicketingView() {
    $travelportTicket = new TravelportTicket(new TravelportFlightRenderer);
    
    $this->assertStringContainsString('TICKETING WITH TRAVELPORT', $travelportTicket->view());
  }
}