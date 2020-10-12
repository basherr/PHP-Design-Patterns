<?php namespace App\Factory\Behavioral\Iterator\UserRoles;

class User
{
  public $name;
  public $role;

  public function __construct(string $name, Role $role)
  {
    $this->name = $name;
    $this->role = $role;
  }
}
