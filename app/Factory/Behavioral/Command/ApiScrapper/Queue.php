<?php namespace App\Factory\Behavioral\Command\ApiScrapper;

class Queue {
  private $_db;

  public function __construct()
  {
    $this->_db = new \Sqlite3(__DIR__ . '/commands.sqlite');
    $this->_db->query('
    DROP TABLE commands;
    CREATE TABLE IF NOT EXISTS commands (
      id INTEGER PRIMARY KEY AUTOINCREMENT,
      command TEXT,
      status INTEGER
    )
    ');
  }

  public function isEmpty(): bool
  {
    $query = 'SELECT COUNT(id) as pendings FROM commands WHERE status = :status';
    $statement = $this->_db->prepare($query);
    $statement->bindValue(':status', AbstractApiScrapper::PENDING);
    $record = $statement->execute();
    $row = $record->fetchArray(SQLITE3_ASSOC);
    return $row['pendings'] === 0;
  }

  public function add(Command $command)
  {
    $query = 'INSERT INTO commands (`command`, `status`) VALUES (:command, :status)';
    $statement = $this->_db->prepare($query);
    $statement->bindValue(':command', \base64_encode(serialize($command)));
    $statement->bindValue(':status', $command->getStatus());
    $statement->execute();
  }

  public function getCommand(): Command
  {
    $query = 'SELECT * FROM commands WHERE status = :status LIMIT 1';
    $statement = $this->_db->prepare($query);
    $statement->bindValue(':status', AbstractApiScrapper::PENDING);
    $record = $statement->execute();
    $row = $record->fetchArray(SQLITE3_ASSOC);
    $command = \unserialize(\base64_decode($row['command']));
    $command->id = $row['id'];
    return $command;
  }

  public function completeCommand(Command $command): void
  {
    $query = 'UPDATE commands SET status = :status WHERE id = :id';
    $statement = $this->_db->prepare($query);
    $statement->bindValue(':status', $command->getStatus());
    $statement->bindValue(':id', $command->getId());
    $statement->execute();
  }

  public function work(): void
  {
    while(!$this->isEmpty()) {
      $command = $this->getCommand();
      
      $command->execute();
    }
    $this->_db->close();
  }
  /**
   * For our convenience, the Queue object is a Singleton.
   */
  public static function get(): Queue
  {
    static $instance;
    if (!$instance) {
        $instance = new Queue;
    }

    return $instance;
  }
}