<?php namespace App\Factory\Behavioral\Iterator\HotelSuppliers;

class HTOSupplier
{
  private $_hotels = [
    ['id' => 1, 'title' => 'Avari tower hotel Kuala Lumpur'],
    ['id' => 2, 'title' => 'Mehran hotel Kuala Lumpur'],
    ['id' => 3, 'title' => 'Foo Hotel Kuala Lumpur']
  ];

  public function getHotels()
  {
    return $this->_hotels;
  }
}
