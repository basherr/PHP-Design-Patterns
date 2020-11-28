<?php namespace App\Patterns\Behavioral\Iterator\HotelSuppliers;

class DTWSupplierIterator implements \Iterator
{
  private $_hotels;
  /**
  * counter for supplier items
  */
  private $_counter = 0;

  public function __construct(DTWSupplier $supplier)
  {
    $this->_hotels = $supplier->getHotels();
  }
  /**
  * current element
  *
  * @param null
  * @return string
  */
  public function current(): string
  {
    return $this->_hotels[$this->_counter]['name'];
  }
  /**
  * get the current index
  *
  * @param null
  * @return int
  */
  public function key(): int
  {
    return $this->_counter;
  }
  /**
  * get the next element in the array
  *
  * @param null
  * @return void
  */
  public function next(): void
  {
    $this->_counter++;
  }
  /**
  * check weather we have next element in the array
  *
  * @param null
  * @return bool
  */
  public function valid(): bool
  {
    return (count($this->_hotels) - 1) > $this->_counter;
  }
  /**
  * rewind from the start
  *
  * @param null
  * @return void
  */
  public function rewind(): void
  {
    $this->_counter = 0;
  }
}
