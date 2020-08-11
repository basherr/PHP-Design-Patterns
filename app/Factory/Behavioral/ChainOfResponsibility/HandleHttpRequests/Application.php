<?php namespace App\Factory\Behavioral\ChainOfResponsibility\HandleHttpRequests;

class Application
{
  private $_request;
  protected $middlewares = [
    'admin' => [
      AuthMiddleware::class,
      AdminMiddleware::class
    ],
    'auth' => [
      AuthMiddleware::class,
    ],
    'guest' => [
      GuestMiddleware::class,
    ]
  ];


  public function __construct()
  {
    $this->bootstrap();
  }

  public function bootstrap()
  {
    $this->_request = new Request($_GET);
    
    $middlewares = $this->middlewares[$this->_request->uri] ?? $this->middlewares['guest'];
    
    foreach ($middlewares as $middleware) {
      if(!(new $middleware())->handle($this->_request)) {
        throw new \Exception('access denied');
      }
    }
  }

  public function render()
  {
    if ($this->_request->uri === 'admin') {
      $this->adminPage();
    } else if ($this->_request->uri === 'auth') {
      $this->authUserPage();
    } else {
      $this->guestPage();
    }
  }

  public function adminPage()
  {
    echo 'Admin Dashboard';
  }

  public function guestPage()
  {
    echo 'Guest Dashboard';
  }

  public function authUserPage()
  {
    echo 'simple auth user page';
  }
}
