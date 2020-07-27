<?php  namespace App\Factory\Creational\StaticFactory\Suppliers;

class SabreSupplier implements Supplier {
  /**
  * send request to the supplier
  *
  * @param string $request
  * @return string $response
  */
  public function request(string $request): string
  {
    return "Your request\"{$request}\" to Sabre has been sent. Please wait for the confirmation message";
  }
}