<?php

use PHPUnit\Framework\TestCase;
use App\Patterns\Creational\Pool\WorkerPool;

class PoolTest extends TestCase {
	
	public function testCanGetNewInstancesWithGet()
	{
		$pool = new WorkerPool;
		$worker1 = $pool->get();
		$worker2 = $pool->get();

		$this->assertCount(2, $pool);
		$this->assertNotSame($worker1, $worker2);
	}

	public function testCanGetSameInstanceTwiceWhenDisposing()
	{
		$pool = new WorkerPool;
		$worker1 = $pool->get();
		$pool->dispose($worker1);
		$worker2 = $pool->get();

		$this->assertCount(1, $pool);
		$this->assertSame($worker1, $worker2);
	}
}