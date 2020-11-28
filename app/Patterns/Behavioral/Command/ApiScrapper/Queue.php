<?php namespace App\Patterns\Behavioral\Command\ApiScrapper;

class Queue {
  private static $_db;
  private static $instance;
  private $status = AbstractApiScrapper::PENDING;

  public function isEmpty(): bool
  {
    $query = 'SELECT COUNT(id) as pendings FROM commands WHERE status = :status';
    $statement = self::$_db->prepare($query);
    $statement->bindValue(':status', AbstractApiScrapper::PENDING);
    $record = $statement->execute();
    $row = $record->fetchArray(SQLITE3_ASSOC);
    return $row['pendings'] === 0;
  }

  public function add(Command $command)
  {
    $query = 'INSERT INTO commands (`command`, `status`) VALUES (:command, :status)';
    $statement = self::$_db->prepare($query);
    $statement->bindValue(':command', \base64_encode(serialize($command)));
    $statement->bindValue(':status', $command->getStatus());
    $statement->execute();
  }

  public function getCommand(): Command
  {
    $query = 'SELECT * FROM commands WHERE status = :status LIMIT 1';
    $statement = self::$_db->prepare($query);
    $statement->bindValue(':status', $this->status);
    $record = $statement->execute();
    $record->finalize();
    $row = $record->fetchArray(SQLITE3_ASSOC);
    $command = \unserialize(\base64_decode($row['command']));
    $command->id = $row['id'];
    return $command;
  }

  public function completeCommand(Command $command): void
  {
    $query = 'UPDATE commands SET status = :status, command = :command WHERE id = :id';
    $statement = self::$_db->prepare($query);
    $statement->bindValue(':status', $command->getStatus());
    $statement->bindValue(':command', \base64_encode(serialize($command)));
    $statement->bindValue(':id', $command->getId());
    $statement->execute()->finalize();
  }

  public function work(): void
  {
    while(!$this->isEmpty()) {
      $command = $this->getCommand();
      
      $command->execute();
    }
    self::$_db->close();
  }
  /**
  * change queue status
  *
  * @param int $status
  * @return self
  */
  public function setStatus(int $status)
  {
    $this->status = $status;
    return $this;
  }
  /**
   * For our convenience, the Queue object is a Singleton.
   */
  public static function get(): Queue
  {
    if (!static::$instance) {
      static::$instance = new Queue;
      static::createSqliteDb();
    }

    return static::$instance;
  }
  /**
  * create sqlite database
  *
  * @param void
  * @return void
  */
  private static function createSqliteDb()
  {
    self::$_db = new \Sqlite3(__DIR__ . '/commands.sqlite');
    self::$_db->query('
    DROP TABLE IF EXISTS commands;
    CREATE TABLE commands (
      id INTEGER PRIMARY KEY AUTOINCREMENT,
      command TEXT,
      status INTEGER
    )
    ');
  }
}