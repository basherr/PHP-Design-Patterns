<?php namespace App\Patterns\Behavioral\ChainOfResponsibility\HandleHttpRequests;

interface Middleware
{
  public function setNext(Middleware $middleware);

  public function handle(Request $request);
}
