<?php namespace App\Patterns\Structural\DecoratorPattern\ActiveRecord;

class AdminFilter
{
  private $_record;
  /**
  * active records
  */

  public function __construct(ActiveRecord $record)
  {
    $this->_record = $record;
  }
  /**
  * filter all admins only
  *
  * @param null
  * @return array
  */
  public function filter()
  {
    return \array_filter($this->_record->all(), function($user) {
      return $user['role'] === 'admin';
    });
  }
}
