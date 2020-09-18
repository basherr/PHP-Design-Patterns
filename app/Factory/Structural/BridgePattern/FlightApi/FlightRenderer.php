<?php namespace App\Factory\Structural\BridgePattern\FlightApi;

interface FlightRenderer {
  public function renderID(int $id);
  public function renderTitle(string $title);
  public function renderOrigin(string $origin);
  public function renderDestination(string $destination);
}