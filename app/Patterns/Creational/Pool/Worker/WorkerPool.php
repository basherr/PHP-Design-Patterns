<?php namespace App\Patterns\Creational\Pool\Worker;

class WorkerPool implements \Countable {
	/**
	* @var StringReverseWorker[]
	*/
	private $occupiedWorkers = [];
	/**
	* @var StringReverseWorker
	*/
	private $freeWorkers = [];
	/*
	* Get
	*
	* @param null
	* @return null
	*/
	public function get()
	{
		// we assume that we can not afford more than 10 workers at a time
		if($this->count() > 10) {
			throw new \Exception('Worker limit reached');
		}
		if(count($this->freeWorkers) == 0) {
			$worker = new StringReverseWorker;
		} else {
			$worker = array_pop($this->freeWorkers);
		}
		$this->occupiedWorkers[spl_object_hash($worker)] = $worker;

		return $worker;
	}
	/*
	* Dispose
	*
	* @param null
	* @return null
	*/
	public function dispose(StringReverseWorker $worker)
	{
		$key = spl_object_hash($worker);
		if(isset($this->occupiedWorkers[$key])) {
			unset($this->occupiedWorkers[$key]);
			$this->freeWorkers[$key] = $worker;
		}
	}
	/*
	* Count
	*
	* @param null
	* @return null
	*/
	public function count()
	{
		return count($this->occupiedWorkers) + count($this->freeWorkers);
	}
}