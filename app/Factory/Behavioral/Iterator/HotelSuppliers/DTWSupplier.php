<?php namespace App\Factory\Behavioral\Iterator\HotelSuppliers;

class DTWSupplier
{
  private $_hotels = [
    ['id' => 1, 'name' => 'Sri Sutra Hotel Kuala Lumpur'],
    ['id' => 2, 'name' => 'Hotel Inn Kuala Lumpur'],
    ['id' => 3, 'name' => 'Moven Pick Hotel Kuala Lumpur']
  ];

  public function getHotels()
  {
    return $this->_hotels;
  }
}
