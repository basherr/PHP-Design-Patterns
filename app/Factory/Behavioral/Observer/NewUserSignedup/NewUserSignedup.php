<?php namespace App\Factory\Behavioral\Observer\NewUserSignedup;

class NewUserSignedup implements \SplSubject
{
  private $observers = [];
  private $_user;

  public function __construct(User $user)
  {
    $this->_user = $user;
  }

  public function attach(\SplObserver $observer)
  {
    $this->observers[] = $observer;
  }

  public function detach(\SplObserver $observer)
  {
    foreach($this->observers as $k => $obs) {
      if($observer === $obs) {
        unset($this->observers[$k]);
        break;
      }
    }
  }

  public function notify(): void
  {
    foreach($this->observers as $observer) {
      $observer->update($this);
    }
  }

  public function setUser(User $user)
  {
    $this->_user = $user;
  }

  public function getUser()
  {
    return $this->_user;
  }
}
