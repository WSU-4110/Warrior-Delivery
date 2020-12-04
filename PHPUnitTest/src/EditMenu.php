<?php
class EditMenu
{
	public $name;
	public $price;
	public $description;
	public $calories;
	
	public function __construct($name, $price, $description, $calories)
	{
		$this->name = $name;
		$this->price = $price;
		$this->description = $description;
		$this->calories = $calories;
	}
	
	public function getName()
	{
		return "$this->name";
	}
	
	public function getPrice()
	{
		return $this->price;
	}
	
	public function getDesc()
	{
		return "$this->description";
	}
	
	public function getCal()
	{
		return $this->calories;
	}
}

?>