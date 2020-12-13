<?php
use PHPUnit\Framework\TestCase;

class CreateDelivererAccountTest extends TestCase
{
	public function testIfFirstNameIsString()
	{ 
		$me = new CreateDelivererAccount("Neelesh","Bollu", "gi1603", "gi1603@wayne.edu", 1237650987, "Password!");
		$this->assertSame("Neelesh", $me->getFirstName());
	}
	
	public function testIfLastNameIsString()
	{ 
		$me = new CreateDelivererAccount("Neelesh","Bollu", "gi1603", "gi1603@wayne.edu", 1237650987, "Password!");
		$this->assertSame("Bollu", $me->getLastName());
	}
	
	public function testIfIDIsString()
	{ 
		$me = new CreateDelivererAccount("Neelesh","Bollu", "gi1603", "gi1603@wayne.edu", 1237650987, "Password!");
		$this->assertSame("gi1603", $me->getID());
	}
	
	public function testIfEmailIsString()
	{ 
		$me = new CreateDelivererAccount("Neelesh","Bollu", "gi1603", "gi1603@wayne.edu", 1237650987, "Password!");
		$this->assertSame("gi1603@wayne.edu", $me->getEmail());
	}
	
	public function testIfPhoneNumberIsNumber()
	{ 
		$me = new CreateDelivererAccount("Neelesh","Bollu", "gi1603", "gi1603@wayne.edu", 1237650987, "Password!");
		$this->assertSame("1237650987", $me->getPhoneNumber());
	}
	
	public function testIfPasswordIsString()
	{ 
		$me = new CreateDelivererAccount("Neelesh","Bollu", "gi1603", "gi1603@wayne.edu", 1237650987, "Password!");
		$this->assertSame("Password!", $me->getPassword());
	}
	
}
?>