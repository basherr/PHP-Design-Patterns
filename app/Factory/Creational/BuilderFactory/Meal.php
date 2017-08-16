<?php namespace App\Factory\Creational\BuilderFactory;

class Meal {
	private $items = [];
	/*
	* Add Item
	*
	* @param null
	* @return null
	*/
	public function addItem(Item $item)
	{
		$this->items[] = $item;
		return $this;
	}
	/*
	* Get cost
	*
	* @param null
	* @return null
	*/
	public function getCost()
	{
		return array_sum(array_map(function($item) {
			return $item->price();
		}, $this->items));
	}
	/*
	* Show Items
	*
	* @param null
	* @return null
	*/
	public function showItems()
	{
		echo '<table>';
		foreach ($this->items as $k => $item) {
			echo '<tr>';
			echo '<td> Item : ' . $item->name() . '</td>';
			echo '<td> Packing : ' . $item->packing()->pack() . '</td>';
			echo '<td> Price : ' . $item->price() . '</td>';
			echo '</tr>';
		}
		echo '</table>';
	}
	/*
	* Get Items
	*
	* @param null
	* @return null
	*/
	public function first()
	{
		return reset($this->items);
	}
	/*
	* last
	*
	* @param null
	* @return null
	*/
	public function last()
	{
		return end($this->items);
	}
	/*
	* Call
	*
	* @param null
	* @return null
	*/
	public function __call($name, $arguments)
	{
		if($name === 'forget') {
			$this->items = [];
		}
	}
}