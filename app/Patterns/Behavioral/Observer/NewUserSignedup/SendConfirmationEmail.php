<?php namespace App\Patterns\Behavioral\Observer\NewUserSignedup;

class SendConfirmationEmail implements \SplObserver
{
  public function update(\SplSubject $subject)
  {
    echo '<pre>Sending confirmation email to: ' . $subject->getUser()->getEmail();
  }
}