<?php namespace App\Factory\Structural\Facade\Quickbooks;

interface Item
{
  public function create(array $item): bool;

  public function fetch(int $itemID): array;

  public function update(int $itemID, array $fields): bool;

  public function delete(int $itemID): bool;
}
