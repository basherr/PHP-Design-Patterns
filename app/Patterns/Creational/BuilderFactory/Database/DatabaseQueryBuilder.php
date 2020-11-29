<?php namespace App\Patterns\Creational\BuilderFactory\Database;

class DatabaseQueryBuilder
{
  private $db = null;

  public function __construct($db)
  {
    $this->setDB($db);
  }

  public function select(string $table, array $fields)
  {
    if($this->db->getConnection() === 'mysql') {
      return (new MysqlQueryBuilder)->select($table, $fields);
    }
    return (new PostgresQueryBuilder)->select($table, $fields);
  }

  public function getDB()
  {
    return $this->db;
  }

  public function setDB($db)
  {
    if ($this->db) {
      $this->db->disconnect();
    }
    $this->db = (new DB($db))->connect();
    return $this;
  }
}
