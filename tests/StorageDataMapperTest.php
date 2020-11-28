<?php

use PHPUnit\Framework\TestCase;
use App\Patterns\Structural\DataMapperPattern\{
  StorageDataMapper,
  User,
  UserMapper
};

class StorageDataMapperTest extends TestCase {

  public function testCanMapUserFromStorage()
  {
    $stroage = new StorageDataMapper([
      1 => ['username' => 'basheer', 'email' => 'basheer@octraves.com']
    ]);

    $mapper = new UserMapper($stroage);
    $response = $mapper->findById(1);

    $this->assertInstanceOf(User::class, $response);
    $this->assertEquals('basheer', $response->getUsername());
  }

  public function testCanThrowExceptionIfUserNotFound()
  {
    $this->expectException(\InvalidArgumentException::class);
    $stroage = new StorageDataMapper([]);

    $mapper = new UserMapper($stroage);
    $response = $mapper->findById(1);
  }
}