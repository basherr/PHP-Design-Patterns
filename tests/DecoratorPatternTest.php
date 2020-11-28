<?php

use PHPUnit\Framework\TestCase;

class DecoratorPatternTest extends TestCase {
  public function testCanGetAllKindOfRoles()
  {
    $users = (new \App\Patterns\Structural\DecoratorPattern\ActiveRecord\User)->all();

    $roles = array_column($users, 'role');
    $this->assertContains('admin', $roles);
    $this->assertContains('hr', $roles);
    $this->assertContains('software engineer', $roles);
  }

  public function testCanFilterAdminsFromActiveRecordsList()
  {
    $user = new \App\Patterns\Structural\DecoratorPattern\ActiveRecord\User;
    $admins = (new \App\Patterns\Structural\DecoratorPattern\ActiveRecord\AdminFilter($user))->filter();
    $this->assertEquals('admin', $admins[0]['role']);
  }
}