<?php namespace App\Patterns\Structural\Facade\Quickbooks;

use App\Patterns\Structural\Facade\Quickbooks\Exceptions\QuickbooksItemNotFoundException;

class QuickbooksItems implements Item
{
  private $items = [];

  public function create(array $item): bool
  {
    $this->items[] = $item;
    return true;
  }

  public function fetch(int $itemID): array
  {
    if(!isset($this->items[$itemID])) {
      throw new QuickBooksItemNotFoundException($itemID);
    }
    return $this->items[$itemID];
  }
  
  public function update(int $itemID, array $fields): bool
  {
    if(!isset($this->items[$itemID])) {
      throw new QuickBooksItemNotFoundException($itemID);
    }

    $this->items[$itemID] = array_merge($this->items[$itemID], $fields);
    return true;
  }

  public function delete(int $itemID): bool
  {
    if(!isset($this->items[$itemID])) {
      throw new QuickBooksItemNotFoundException($itemID);
    }
    unset($this->items[$itemID]);
    return true;
  }
}
