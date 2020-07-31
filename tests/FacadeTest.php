<?php

use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase {
  private $facade;
  private $defaulItem = ['name' => 'cement', 'costcode' => 'ABE-222'];

  public function setUp(): void
  {
    $this->facade = new \App\Factory\Structural\Facade\Quickbooks\QuickbooksFacade('test123');
    $this->facade->createItem($this->defaulItem);
  }
	
  public function testQuickbooksFacadeCanCreateItem() {
    $this->facade = new \App\Factory\Structural\Facade\Quickbooks\QuickbooksFacade('test123');

    $this->assertTrue($this->facade->createItem($this->defaulItem));
  }
  
  public function testQuickbooksFacadeCanReturnTheCreatedItem() {
    $item = $this->facade->showItem(0);
    $this->assertEquals($this->defaulItem, $item);
  }
  
  public function testQuickbooksFacadeCanUpdateTheItem() {
    $updatedItem = ['name' => 'Plumbing', 'costcode' => 'BDD-222'];
    $response = $this->facade->updateItem(0, $updatedItem);
    
    $this->assertTrue($response);
    $this->assertEquals($updatedItem, $this->facade->showItem(0));
  }
  
  public function testQuickbooksFacadeCanDeleteItem() {
    $this->assertTrue($this->facade->deleteItem(0));
  }
  
}