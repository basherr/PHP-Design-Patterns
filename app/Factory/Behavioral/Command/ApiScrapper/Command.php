<?php namespace App\Factory\Behavioral\Command\ApiScrapper;

interface Command {
  public function execute(): void;
  public function getStatus(): int;
  public function success(): void;
  public function fail(): void;
}