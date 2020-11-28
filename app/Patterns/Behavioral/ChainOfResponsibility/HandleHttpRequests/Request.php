<?php namespace App\Patterns\Behavioral\ChainOfResponsibility\HandleHttpRequests;

class Request
{
  private $request;

  public function __construct(array $request)
  {
    $this->request = json_decode(\json_encode($request));
  }


  public function __get($key)
  {
    if(isset($this->request->{$key})) {
      return $this->request->{$key};
    }
    return null;
  }
}
