<?php
use PHPUnit\Framework\TestCase;

class EditMenuTest extends TestCase
{
	public function testIfGetNameIsString()
	{ 
		$cookie = new EditMenu("cookie", 5, "Chocolate Chip", 300);
		$this->assertSame("cookie", $cookie->getName());
		//assertSame is used to check if both type and value are the same,
		//I think this is the same as assertType in JUnit
	}
	
	public function testIfGetPriceIsFloat()
	{
		$cookie = new EditMenu("cookie", 3, "Chocolate Chip", 300);
		$this->assertSame(3, $cookie->getPrice());
	}

	public function testIfGetDescriptionIsString()
	{
		$cookie = new EditMenu("cookie", 5, "Chocolate Chip", 300);
		$this->assertSame("Chocolate Chip", $cookie->getDesc());
	}
	
	public function testIfGetCaloriesIsInt()
	{ 
		$cookie = new EditMenu("cookie", 5, "Chocolate Chip", 300);
		$this->assertSame(300, $cookie->getCal());
	}
}

?>