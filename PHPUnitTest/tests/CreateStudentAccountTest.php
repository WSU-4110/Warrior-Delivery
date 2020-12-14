<?
use PHPUnit\Framework\TestCase;

class CreateStudentAccountTest extends TestCase
{
	public function testIfFirstNameIsString()
	{ 
		$me = new CreateStudentAccount("Neelesh","Bollu", "gi1603", "gi1603@wayne.edu", "Password!");
		$this->assertSame("Neelesh", $me->getFirstName());
	}
	
	public function testIfLastNameIsString()
	{ 
		$me = new CreateStudentAccount("Neelesh","Bollu", "gi1603", "gi1603@wayne.edu", "Password!");
		$this->assertSame("Bollu", $me->getLastName());
	}
	
	public function testIfIDIsString()
	{ 
		$me = new CreateStudentAccount("Neelesh","Bollu", "gi1603", "gi1603@wayne.edu", "Password!");
		$this->assertSame("gi1603", $me->getID());
	}
	
	public function testIfEmailIsString()
	{ 
		$me = new CreateStudentAccount("Neelesh","Bollu", "gi1603", "gi1603@wayne.edu", "Password!");
		$this->assertSame("gi1603@wayne.edu", $me->getEmail());
	}
	
	public function testIfPasswordIsString()
	{ 
		$me = new CreateStudentAccount("Neelesh","Bollu", "gi1603", "gi1603@wayne.edu", "Password!");
		$this->assertSame("Password!", $me->getPassword());
	}
	
}
?>