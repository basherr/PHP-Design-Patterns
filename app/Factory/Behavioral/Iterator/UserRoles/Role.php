<?php namespace App\Factory\Behavioral\Iterator\UserRoles;

class Role
{
  public $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }
}
