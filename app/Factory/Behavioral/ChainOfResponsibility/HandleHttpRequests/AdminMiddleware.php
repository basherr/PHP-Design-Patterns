<?php namespace App\Factory\Behavioral\ChainOfResponsibility\HandleHttpRequests;

class AdminMiddleware extends AbstractMiddleware
{
  public function handle(Request $request) {
    if($request->role !== 'admin') {
      return false;
    }
    return parent::handle($request);
  }
}
