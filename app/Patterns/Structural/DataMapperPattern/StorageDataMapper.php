<?php  namespace App\Patterns\Structural\DataMapperPattern;


class StorageDataMapper {
  /**
  * storage data
  */
  private $data = [];
  
  public function __construct(array $data)
  {
    $this->data = $data;
  }

  public function find(int $id)
  {
    if(isset($this->data[$id])) {
      return $this->data[$id];
    }
    return null;
  }
}