<?php namespace App\Patterns\Creational\Builder\Database;

class MysqlQueryBuilder implements SqlQueryBuilder {
  protected $table = '';
  protected $fields = [];
  protected $params = [];
  protected $condition = '';

  public function select(string $table, array $fields)
  {
    $this->table = $table;
    $this->fields = $fields;
    return $this;
  }

  public function where(string $condition, array $params)
  {
    $this->condition = $condition;
    $this->params = $params;
    return $this;
  }

  public function count(string $col = null)
  {
    $query = 'SELECT COUNT(' . $col . ') FROM `' . $this->table . '`';

    if(count($this->params) > 0) {
      $query .= ' WHERE(' . implode(',', $this->params) . ')';
    }
    
    return $query;
  }

  public function get()
  {
    $query = 'SELECT ' . implode(',', $this->fields) . ' FROM `' . $this->table . '`';

    if(count($this->params) > 0) {
      foreach($this->params as $k => $v) {
        $this->condition = str_replace($k, $v, $this->condition);
      }
      $query .= ' WHERE ' . $this->condition;
    }
    
    return $query;
  }

  public function __call($command, $arguments)
  {
    $class_methos = get_class_methods(__CLASS__);

    if(!in_array($command, $class_methos)) {
      throw new \BadMethodCallException("Method {$command} not defined on {get_class_name()}");
    }
  }
}