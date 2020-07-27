<?php  namespace App\Factory\Creational\StaticFactory\Suppliers;

interface Supplier {
  /**
  * send a request to the supplier
  *
  * @param string $request
  * @return string $response
  */
  public function request(string $request): string;

}