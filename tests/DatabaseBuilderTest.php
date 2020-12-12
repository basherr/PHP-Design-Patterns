<?php

use PHPUnit\Framework\TestCase;
use App\Patterns\Creational\Builder\Database\DatabaseQueryBuilder;

class DatabaseBuilderTest extends TestCase {
    /**
    * connects user to any database
    *
    * @param void
    * @return void
    */
    public function testUserCanConnectToAnyDatabase()
	{
		$connection = 'mysql';
		$builder = new DatabaseQueryBuilder($connection);
		$postgresConnection = 'postgres';
		$postgresBuilder = new DatabaseQueryBuilder($postgresConnection);
		
		$this->assertEquals($connection, $builder->getDB()->getConnection());
		$this->assertEquals($postgresConnection, $postgresBuilder->getDB()->getConnection());
	}
    /**
    * connect and disconnect
    *
    * @param void
    * @return void
    */
	public function testUserCanDisconnectAndReconnectToTheDatabase()
	{
		$connection = 'mysql';
		$builder = new DatabaseQueryBuilder($connection);

		$builder->getDB()->disconnect()->connect();
		$this->assertEquals($connection, $builder->getDB()->getConnection());
	}
    /**
    * can query mysql database
    *
    * @param void
    * @return void
    */
	public function testUserCanQueryFroMysqlDatabase()
	{
		$connection = 'mysql';
		$builder = new DatabaseQueryBuilder($connection);

		$query = $builder->select('users', ['user_id', 'user_name'])
								->where('UserName = :userName', [':userName' => 'bsr.anwar'])
								->get();
		$this->assertEquals('SELECT user_id,user_name FROM `users` WHERE UserName = bsr.anwar', $query);
	}
    /**
    * can query postgres database
    *
    * @param void
    * @return void
    */
	public function testUserCanQueryFromPostgresDatabase()
	{
		$connection = 'postgres';
		$builder = new DatabaseQueryBuilder($connection);

		$query = $builder->select('users', ['user_id', 'user_name'])
								->where('UserName = :userName', [':userName' => 'khan'])
								->limit(0, 10)
								->get();
		$this->assertEquals('SELECT user_id,user_name FROM `users` WHERE UserName = khan LIMIT 0,10', $query);
	}
    /**
    * limit on records is missing
    *
    * @param void
    * @return void
    */
	public function testUserCanNotUseLimitWithMysqlQuery()
	{
		$this->expectException(\BadMethodCallException::class);
		$connection = 'mysql';
		$builder = new DatabaseQueryBuilder($connection);

		$builder->select('users', ['user_id', 'user_name'])
								->where('UserName = :userName', [':userName' => 'khan'])
								->limit(0, 10)
								->get();
	}
}