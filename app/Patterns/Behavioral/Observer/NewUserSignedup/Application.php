<?php namespace App\Patterns\Behavioral\Observer\NewUserSignedup;

class Application
{
  public function render()
  {
    $observer1 = new ConfirmWhatsapp();
    $observer2 = new SendConfirmationEmail();

    echo '<pre>[new user signed up]';
    $observable = new NewUserSignedup(new User('bsr.anwar@gmail.com', '123123123'));
    $observable->attach($observer1);
    $observable->attach($observer2);
    $observable->notify();
    echo '<pre>---Whatsapp observer detached---';
    $observable->detach($observer1);
    
    echo '<pre>[new user signed up]';
    $observable->setUser(new User('foo@gmail.com', '123123123'));
    $observable->notify();
  }
}
