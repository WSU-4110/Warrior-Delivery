<?php
class CreateStudentAccount
{
	public $firstName;
	public $lastName;
	public $ID;
	public $email;
	public $password;
	
	public function __construct($fname, $lname, $ID, $email, $password)
	{
		$this->firstName = $fname;
		$this->lastName = $lname;
		$this->ID = $ID;
		$this->email = $email;
		$this->password = $password;
		
		// if (!validEmail())
		// {
			// throw new Exception("The email and AccessID do not match");
		// }
			
	}
	
	public function getFirstName()
	{
		return "$this->firstName";
	}
	
	public function getLastName()
	{
		return "$this->lastName";
	}
	
	public function getID()
	{
		return "$this->ID";
	}
	
	public function getEmail()
	{
		return "$this->email";
	}
	
	public function getPassword()
	{
		return "$this->password";
	}
	
	// public function validEmail()
	// {
		// if(strpos("$email", "$ID"))
		// {
			// return true;
		// }
		// else
		// {
			// return false;
		// }
	// }
}
?>