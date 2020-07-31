<?php namespace App\Factory\Structural\Facade\Quickbooks\Exceptions;

class QuickbooksItemNotFoundException extends \Exception
{
  public function __construct($itemID)
  {
    parent::__construct("undefined offset '{$itemID}' in items", 404);
  }
}
