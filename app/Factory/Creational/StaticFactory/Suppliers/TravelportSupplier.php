<?php  namespace App\Factory\Creational\StaticFactory\Suppliers;

class TravelportSupplier implements Supplier
{
  /**
  * send request to the supplier
  *
  * @param string $request
  * @return string $response
  */
  public function request(string $request): string
  {
    return "Travelport has recieve your request: '{$request}'. An email has been sent to the supervisor";
  }
}