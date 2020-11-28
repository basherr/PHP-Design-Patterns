<?php

use PHPUnit\Framework\TestCase;
use App\Patterns\Behavioral\Observer\NewUserSignedup\{
  User,
  NewUserSignedup,
  ConfirmWhatsapp,
  SendConfirmationEmail
};

class ObserverPatternTest extends TestCase {
  public function testUserCanNotifyWhatsappObserver()
  {
    $user = new User('basheer@octraves.com', '123123123');
    $observable = new NewUserSignedup($user);
    $observable->attach(new ConfirmWhatsapp);

    $this->expectOutputString('<pre>Sending text to: ' . $user->getPhoneNo());
    $observable->notify();
  }

  public function testUserCanNotifyEmailObserver()
  {
    $user = new User('basheer@octraves.com', '123123123');
    $observable = new NewUserSignedup($user);
    $observable->attach(new SendConfirmationEmail);

    $this->expectOutputString('<pre>Sending email to: ' . $user->getEmail());
    $observable->notify();
  }
}