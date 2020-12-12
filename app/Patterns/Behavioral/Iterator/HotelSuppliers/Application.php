<?php namespace App\Patterns\Behavioral\Iterator\HotelSuppliers;

class Application
{
  public function render()
  {
    $iterator = new \AppendIterator;
    $iterator->append(new DTWSupplierIterator(new DTWSupplier));
    $iterator->append(new HTOSupplierIterator(new HTOSupplier));

    foreach ($iterator as $value) {
      echo '<pre>value: '.  $value;
    }
  }
}
