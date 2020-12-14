<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class countValuesTest extends TestCase
{
   public function testcheckConnection(): void
   { require 'src\countValues.php';
   
   
   $test1 = new deliverer();
   $Name = 'id15421026_affan';
   $password = 'Rj!cId5d+)xiYL$7';
   $database = 'id15421026_diningdelivery';
   $firstname = 'Affan';
   $lastname = 'Atif';
   $access_id = 'ga3010';
   $username = 'afnanee213';
   
   $final = 'Affan Atif ga3010 afnanee213';
 
   
       $result = $test1->countValuesHere($Name,$password, $database, $firstname, $lastname, $access_id, $username);
	   $this->assertSame($final, $result);
       //this test returns the final string of attributes for the current delivery account with their details
   }
  
}