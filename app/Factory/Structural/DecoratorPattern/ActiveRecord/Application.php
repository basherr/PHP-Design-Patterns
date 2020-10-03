<?php namespace App\Factory\Structural\DecoratorPattern\ActiveRecord;

class Application
{
  public function run()
  {
    $user = new User;

    echo '<pre><h1>All Users</h1>';
    foreach($user->all() as $u) {
      echo 'Name : ' . $u['name'] . ', Role: '. $u['role'] . "<br/>";
    }
    $admins = (new AdminFilter($user))->filter();

    echo '<pre><h1>Admins filtered</h1>';
    foreach($admins as $u) {
      echo 'Name : ' . $u['name'];
    }
  }
}