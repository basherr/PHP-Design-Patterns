<?php

use PHPUnit\Framework\TestCase;

class ChainOfResponsibility extends TestCase
{
  public function testApplicationCanRenderGuestPage()
  {
    $app = new \App\Factory\Behavioral\ChainOfResponsibility\HandleHttpRequests\Application;
    
    $this->expectOutputString('Guest Dashboard', $app->render());
  }
  
  public function testApplicationCanRenderAuthUserPage()
  {
    $_GET = ['uri' => 'auth', 'user' => 'basheer'];
    $app = new \App\Factory\Behavioral\ChainOfResponsibility\HandleHttpRequests\Application;
    
    $this->expectOutputString('simple auth user page', $app->render());
  }
  
  public function testApplicationCanRenderAdminPage()
  {
    $_GET = ['uri' => 'admin', 'user' => 'basheer', 'role' => 'admin'];
    $app = new \App\Factory\Behavioral\ChainOfResponsibility\HandleHttpRequests\Application;
    
    $this->expectOutputString('Admin Dashboard', $app->render());
  }
  
  public function testApplicationCanThrowErrorOnWrongAdminUser()
  {
    $this->expectException(\Exception::class);
    $_GET = ['uri' => 'admin', 'user' => 'base', 'role' => 'admin'];
    $app = new \App\Factory\Behavioral\ChainOfResponsibility\HandleHttpRequests\Application;
    $app->render();
  }
}
