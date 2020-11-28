<?php

use PHPUnit\Framework\TestCase;
use App\Patterns\Behavioral\Iterator\HotelSuppliers\{
  HTOSupplierIterator,
  HTOSupplier,
  DTWSupplierIterator,
  DTWSupplier
};

class IteratorPatternTest extends TestCase {
  public function testCanIteratorThroughHTOSupplierIterator()
  {
    $supplier = new HTOSupplier;
    $iterator = new HTOSupplierIterator($supplier);
    
    $hotelName = $iterator->current();
    $this->assertSame($supplier->getHotels()[0]['title'], $hotelName);
  }
  
  public function testCanIteratorThroughDTWSupplierIterator()
  {
    $supplier = new DTWSupplier;
    $iterator = new DTWSupplierIterator($supplier);
    
    $hotelName = $iterator->current();
    $this->assertSame($supplier->getHotels()[0]['name'], $hotelName);
  }
}