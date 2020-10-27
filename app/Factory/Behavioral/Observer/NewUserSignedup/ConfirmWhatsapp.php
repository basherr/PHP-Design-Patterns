<?php namespace App\Factory\Behavioral\Observer\NewUserSignedup;

class ConfirmWhatsapp implements \SplObserver
{
  public function update(\SplSubject $subject)
  {
    echo '<pre>Sending text to: ' . $subject->getUser()->getPhoneNo();
  }
}