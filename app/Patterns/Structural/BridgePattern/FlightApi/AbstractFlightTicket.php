<?php namespace App\Patterns\Structural\BridgePattern\FlightApi;

abstract class AbstractFlightTicket {
  protected $flightRenderer;

  public function __construct(FlightRenderer $renderer)
  {
    $this->flightRenderer = $renderer;
  }

  public abstract function view(): string;
}