<?php namespace App\Factory\Structural\DecoratorPattern\ActiveRecord;

interface ActiveRecord {
  public function all(): array;
}