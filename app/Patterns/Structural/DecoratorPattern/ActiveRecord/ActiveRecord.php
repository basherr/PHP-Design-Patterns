<?php namespace App\Patterns\Structural\DecoratorPattern\ActiveRecord;

interface ActiveRecord {
  public function all(): array;
}