<?php  namespace App\Patterns\Creational\StaticFactory\Suppliers;

final class FlightSupplierFactory {
  /**
  * provide the right supplier for the request id
  *
  * @param null
  * @return void
  */
  public static function get(int $supplierID): Supplier
  {
    if($supplierID === 1) {
      return new TravelportSupplier();
    }
    else if($supplierID === 2) {
      return new SabreSupplier();
    }
    throw new \ArgumentException('Please provide valid argument');
  }
}