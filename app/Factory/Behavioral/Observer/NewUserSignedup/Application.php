<?php namespace App\Factory\Behavioral\Observer\NewUserSignedup;

class Application
{
  public function run()
  {
    $observer1 = new ConfirmWhatsapp();
    $observer2 = new SendConfirmationEmail();

    $observable = new NewUserSignedup(new User('basheer@octraves.com', '123123123'));
    $observable->attach($observer1);
    $observable->attach($observer2);
    $observable->notify();
    echo '<pre>Whatsapp observer detached';
    $observable->detach($observer1);

    $observable->setUser(new User('taha@octraves.com', '123123123'));
    $observable->notify();
  }
}
