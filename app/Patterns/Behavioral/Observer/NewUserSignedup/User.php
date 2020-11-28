<?php namespace App\Patterns\Behavioral\Observer\NewUserSignedup;

class User
{
  private $_email;
  private $_phoneNum;

  public function __construct(string $email, string $phoneNum)
  {
    $this->_email = $email;
    $this->_phoneNum = $phoneNum;
  }

  public function getPhoneNo()
  {
    return $this->_phoneNum;
  }

  public function getEmail()
  {
    return $this->_email;
  }
}
