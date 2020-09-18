<?php namespace App\Factory\Structural\BridgePattern\FlightApi;

class TravelportFlightRenderer implements FlightRenderer
{
  public function renderID(int $id)
  {
    return "<p>ID: {$id} <br/>";
  }

  public function renderTitle(string $title)
  {
    return "Title: {$title}<br/>";
  }
  
  public function renderOrigin(string $origin)
  {
    return "Origin {$origin}";
  }
  
  public function renderDestination(string $dest)
  {
    return "Destination {$dest}";
  }
}
