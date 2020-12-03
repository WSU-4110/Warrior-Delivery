<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{
    
    public function testReturnsFullName()
    {
        //require 'User.php';
        $user = new User;
        
        $user->first_name= "Sanaz";
        $user->last_name = "Rabinia";
        
        $this->assertEquals('Sanaz Rabinia', $user->getFullName());
       
    }
    
    public function testFullNameIsEmptyByDefault()
        {
        
        $user = new User;
        $this-> assertEquals(' ', $user->getFullName());
    }
    // function without test keyword
    public function testUserHasFirstName()
    
    {
     
        $user = new User;
        $user->first_name = "Sanaz";
        $this->assertEquals('Sanaz', $user->first_name);
        
    }
    
}


?>