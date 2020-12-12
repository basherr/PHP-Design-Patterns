<?php namespace App\Patterns\Behavioral\Observer\NewUserSignedup;

class ConfirmWhatsapp implements \SplObserver
{
  public function update(\SplSubject $subject)
  {
    echo '<pre>Sending verification code to: ' . $subject->getUser()->getPhoneNo();
  }
}