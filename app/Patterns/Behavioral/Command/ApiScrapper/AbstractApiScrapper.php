<?php namespace App\Patterns\Behavioral\Command\ApiScrapper;

abstract class AbstractApiScrapper implements Command
{
  const PENDING = 1;
  const SUCCESS = 2;
  const FAILED = 3;

  public $id;

  private $_status = self::PENDING;

  public abstract function map($response): void;

  public abstract function execute(): void;

  public function getStatus(): int
  {
    return $this->_status;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function success(): void
  {
    $this->_status = self::SUCCESS;
    Queue::get()->completeCommand($this);
  }
  
  public function fail(): void
  {
    $this->_status = self::FAILED;
    Queue::get()->completeCommand($this);
  }
}
