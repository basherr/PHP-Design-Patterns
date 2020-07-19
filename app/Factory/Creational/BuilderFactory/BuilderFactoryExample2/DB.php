<?php namespace App\Factory\Creational\BuilderFactory\BuilderFactoryExample2;

class DB {
  private $connection = '';
  private $db = '';

  public function __construct($connection)
  {
    $this->connection = $connection;
  }

  public function connect()
  {
    $this->db = $this->connection;
    return $this;
  }

  public function disconnect()
  {
    $this->db = '';
    return $this;
  }

  public function reconnect()
  {
    $this->connect();
    return $this;
  }

  public function getConnection()
  {
    return $this->db;
  }
}