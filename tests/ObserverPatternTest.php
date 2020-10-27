<?php

use PHPUnit\Framework\TestCase;
use App\Factory\Behavioral\Observer\NewUserSignedup\{
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

    $this->expectOutputString('Sending text to: ' . $user->getPhoneNo());
    $observable->notify();
  }

  public function testUserCanNotifyEmailObserver()
  {
    $user = new User('basheer@octraves.com', '123123123');
    $observable = new NewUserSignedup($user);
    $observable->attach(new SendConfirmationEmail);

    $this->expectOutputString('Sending email to: ' . $user->getEmail());
    $observable->notify();
  }
}