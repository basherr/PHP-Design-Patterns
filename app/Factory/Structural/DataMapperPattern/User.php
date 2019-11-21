<?php  namespace App\Factory\Structural\DataMapperPattern;

class User {
  /**
  * username
  */
  private $username;
  /**
  * email
  */
  private $email;

  public static function fromState(array $state): self
  {
    return new self($state['username'], $state['email']);
  }

  public function __construct($username, $email)
  {
    $this->username = $username;
    $this->email = $email;
  }

  public function getUsername()
  {
    return $this->username;
  }
  
  public function getEmail()
  {
    return $this->email;
  }
}