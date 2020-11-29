<?php namespace App\Patterns\Creational\BuilderFactory\Database;

class DB {
  private $connection = '';
  private $db = '';

  public function __construct($connection)
  {
    $this->connection = $connection;
  }
  /**
  * connect to the database
  *
  * @param void
  * @return self
  */
  public function connect()
  {
    $this->db = $this->connection;
    return $this;
  }
  /**
  * disconnect from database
  *
  * @param void
  * @return self
  */
  public function disconnect()
  {
    $this->db = '';
    return $this;
  }
  /**
  * reconnect after disconnect
  *
  * @param void
  * @return self
  */
  public function reconnect()
  {
    $this->connect();
    return $this;
  }
  /**
  * give the database connection
  *
  * @param void
  * @return void
  */
  public function getConnection()
  {
    return $this->db;
  }
}