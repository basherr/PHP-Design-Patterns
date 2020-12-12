<?php namespace App\Patterns\Creational\Builder\Database;

class Application
{
    public function render()
    {
        $builder = new DatabaseQueryBuilder('mysql');
		$query = $builder->select('users', ['user_id', 'user_name'])
								->where('UserName = :userName', [':userName' => 'bsr.anwar'])
								->get();
		echo '<pre>[Mysql Query] : ' . $query;

		
		$postgresQuery = $builder->setDB('postgres')->select('users', ['user_id', 'user_name'])
											->where('UserName = :userName', [':userName' => 'khan'])
											->limit(0, 10)
											->get();
		echo '<pre>[Postgres Query] : ' . $postgresQuery;
    }
}