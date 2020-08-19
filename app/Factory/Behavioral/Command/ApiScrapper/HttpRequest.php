<?php namespace App\Factory\Behavioral\Command\ApiScrapper;

interface HttpRequest
{
  public function get(string $url, array $request = []);
  public function setHeaders(array $headers);
}