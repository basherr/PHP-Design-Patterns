<?php namespace App\Factory\Behavioral\Iterator\UserRoles;

class Application
{
  const ADMIN = 'admin';
  const MANAGER = 'manager';
  
  public function run()
  {
    $basheer = new User('Basheer', new Role(self::ADMIN));
    $shaheer = new User('Shaheer', new Role(self::MANAGER));
    
    $admin = new UserRole($basheer);

    $shaher = new UserRole($shaheer);
    $ali = new UserRole(new User('ALI', new Role(self::MANAGER)));

    $admin->addUserRole($shaher);
    $admin->addUserRole($ali);

    foreach($admin as $user) {
      echo 'Name: ' . $user->getName() . ' Role: ' . $user->getRole() . '<br/>';
    }
  }
}
