<?php namespace App\Factory\Creational\BuilderFactory\BuilderFactoryExample2;

interface SqlQueryBuilder {
  public function select(string $table, array $fields);
  public function where(string $condition, array $params);
  public function count();
  public function get();
}