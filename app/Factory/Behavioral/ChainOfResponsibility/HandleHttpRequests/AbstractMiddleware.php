<?php namespace App\Factory\Behavioral\ChainOfResponsibility\HandleHttpRequests;

class AbstractMiddleware implements Middleware
{
  private $next;

  public function setNext(Middleware $next): Middleware {
    $this->next = $next;

    return $next;
  }

  public function handle(Request $request)
  {
    if($this->next) {
      return $this->next->handle($request);
    }
    return true;
  }
}
