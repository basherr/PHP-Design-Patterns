<?php namespace App\Factory\Structural\Facade\Quickbooks;

interface Quickbooks {
  public function connect(): void;
  public function disconnect(): void;
}