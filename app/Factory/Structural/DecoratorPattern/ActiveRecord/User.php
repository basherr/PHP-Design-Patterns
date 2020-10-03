<?php namespace App\Factory\Structural\DecoratorPattern\ActiveRecord;

class User implements ActiveRecord
{
  private $_users = [
    ['name' => 'Basheer', 'role' => 'admin'],
    ['name' => 'Asim', 'role' => 'hr'],
    ['name' => 'Ali', 'role' => 'software engineer'],
  ];

  public function all(): array
  {
    return $this->_users;
  }
}
