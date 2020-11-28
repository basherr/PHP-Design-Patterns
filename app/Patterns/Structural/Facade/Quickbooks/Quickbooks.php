<?php namespace App\Patterns\Structural\Facade\Quickbooks;

interface Quickbooks {
  public function connect(): void;
  public function disconnect(): void;
}