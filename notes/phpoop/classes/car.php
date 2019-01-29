<?php
class Car
{
	
	public $make;
	public $model;
	public $color;
	
	public function start()
	{
		echo 'car is starting...';
	}
	public function setMake($make)
	{
		$this->make = $make;
	}
	public function getMake()
	{
	return $this->make;
	}
}
?>