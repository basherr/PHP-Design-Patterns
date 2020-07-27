<?php

use PHPUnit\Framework\TestCase;
use App\Factory\Creational\StaticFactory\Suppliers\{
  FlightSupplierFactory,
  SabreSupplier,
  TravelportSupplier
};

class StaticFactoryTest extends TestCase
{

  public function testFlightSupplierFactoryCanCreateSabreSupplier()
  {
    $factory = (new FlightSupplierFactory)->get(1);

    $this->assertInstanceOf(TravelportSupplier::class, $factory);
    $this->assertStringContainsString('Book a flight', $factory->request('Book a flight'));
  }
  
  public function testFlightSupplierFactoryCanCreateTravelportSupplier()
  {
    $factory = (new FlightSupplierFactory())->get(2);

    $this->assertInstanceOf(SabreSupplier::class, $factory);
    $this->assertStringContainsString('Having issue booking a flight', $factory->request('Having issue booking a flight'));
  }
}