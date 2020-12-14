<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class deliverertest extends TestCase
{
   public function testcheckConnection(): void
   { require 'src\deliver.php';
   
   
   $test1 = new deliverer();
   $Name = 'id15421026_affan';
   $password = 'Rj!cId5d+)xiYL$7';
   $database = 'id15421026_diningdelivery';
       
	   $this->assertTrue($test1->checkConnection($Name,$password, $database));
       
   }
  
}