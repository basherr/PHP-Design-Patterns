<?php namespace App\Factory\Behavioral\Iterator\UserRoles;

class UserRole implements \Countable, \IteratorAggregate
{
  private $user;
  private $storage;

  public function __construct(User $user)
  {
    $this->storage = new \SplObjectStorage();
    $this->user = $user;
  }

  public function addUserRole(UserRole $userRole)
  {
    $this->storage->attach($userRole);
  }


  public function getUsers(): \SplObjectStorage
  {
    return $this->storage;
  }

  public function getIterator(): RoleIterator
  {
    return new RoleIterator($this);
  }

  public function count(): int
  {
    return count(new RoleIterator($this));
  }

  public function getName(): string
  {
    return $this->user->name;
  }

  public function getRole()
  {
    return $this->user->role->name;
  }
}
