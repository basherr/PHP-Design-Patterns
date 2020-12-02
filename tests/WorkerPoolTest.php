<?php

use PHPUnit\Framework\TestCase;
use App\Patterns\Creational\Pool\Worker\WorkerPool;

class WorkerPoolTest extends TestCase {
	/**
	* get new instance
	*
	* @param void
	* @return void
	*/
	public function testCanGetNewInstancesWithGet()
	{
		$pool = new WorkerPool;
		$worker1 = $pool->get();
		$worker2 = $pool->get();

		$this->assertCount(2, $pool);
		$this->assertNotSame($worker1, $worker2);
	}
	/**
	* reuse the same instance after disposing
	*
	* @param void
	* @return void
	*/
	public function testCanGetSameInstanceTwiceWhenDisposing()
	{
		$pool = new WorkerPool;
		$worker1 = $pool->get();
		$pool->dispose($worker1);
		$worker2 = $pool->get();

		$this->assertCount(1, $pool);
		$this->assertSame($worker1, $worker2);
	}
	/**
	* throw error on exceeding the worker limit
	*
	* @param void
	* @return void
	*/
	public function testShouldThrowExceptionOnExceedingLimit()
	{
		$this->expectException(\Exception::class);
		$pool = new WorkerPool;
		for($i = 0; $i < 20; $i++) {
			$pool->get();
		}
	}
}