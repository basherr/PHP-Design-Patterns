<?php namespace App\Factory\Behavioral\Iterator\UserRoles;

class RoleIterator implements \Iterator, \Countable
{
  private $users = [];
  private $counter = 0;

  public function __construct(UserRole $userRole)
  {
    $this->addUserRole($userRole);
    $this->counter = 0;
  }

  public function addUserRole(UserRole $userRole): void
  {
    foreach($userRole->getUsers() as $user) {
      $this->users[] = $user;
    }
  }

  public function current(): UserRole
  {
    return $this->users[$this->counter];
  }

  public function next(): void
  {
    $this->counter++;
  }

  public function rewind(): void
  {
    $this->counter = 0;
  }

  public function valid(): bool
  {
    return isset($this->users[$this->counter]);
  }

  public function key(): int
  {
    return $this->counter;
  }

  public function count(): int
  {
    return count($this->users);
  }
}
