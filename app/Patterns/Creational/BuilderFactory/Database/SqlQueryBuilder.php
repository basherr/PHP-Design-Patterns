<?php namespace App\Patterns\Creational\BuilderFactory\Database;

interface SqlQueryBuilder {
  public function select(string $table, array $fields);
  public function where(string $condition, array $params);
  public function count();
  public function get();
}