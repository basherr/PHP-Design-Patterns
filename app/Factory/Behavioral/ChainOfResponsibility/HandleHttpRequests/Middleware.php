<?php namespace App\Factory\Behavioral\ChainOfResponsibility\HandleHttpRequests;

interface Middleware
{
  public function setNext(Middleware $middleware);

  public function handle(Request $request);
}
