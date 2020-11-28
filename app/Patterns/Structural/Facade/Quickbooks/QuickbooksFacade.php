<?php namespace App\Patterns\Structural\Facade\Quickbooks;

class QuickbooksFacade implements Quickbooks {
  private $apiKey = null;
  private $quickbookItems;

  public function __construct(string $apiKey)
  {
    $this->apiKey = $apiKey;
    $this->quickbookItems = new QuickbooksItems();
  }

  public function connect(): void
  {
    // echo '<br/>Connected to quickbooks via: ' . $this->apiKey;
  }

  public function createItem(array $item): bool
  {
    $this->connect();

    $response = $this->quickbookItems->create($item);

    $this->disconnect();

    return $response;
  }
  
  public function showItem(int $itemID): array
  {
    $this->connect();

    $item = $this->quickbookItems->fetch($itemID);

    $this->disconnect();
    
    return $item;
  }

  public function updateItem(int $itemID, array $fields): bool
  {
    $this->connect();

    $response = $this->quickbookItems->update($itemID, $fields);

    $this->disconnect();

    return $response;
  }

  public function deleteItem(int $itemID): bool
  {
    $this->connect();

    $response = $this->quickbookItems->delete($itemID);
    
    $this->disconnect();

    return $response;
  }

  public function disconnect(): void
  {
    // echo '<br/>Disconnected from quickbooks<br/>';
  }
}