<?php  namespace App\Patterns\Structural\DataMapperPattern;

class UserMapper {
  /**
  * storage data mapper
  */
  private $storage;

  public function __construct(StorageDataMapper $storage)
  {
    $this->storage = $storage;
  }

  public function findById(int $id)
  {
    $data = $this->storage->find($id);

    if($data === null) {
      throw new \InvalidArgumentException("User #$id not found");
    }
    return $this->mapRowToUser($data);
  }

  public function mapRowToUser($data)
  {
    return User::fromState($data);
  }
}