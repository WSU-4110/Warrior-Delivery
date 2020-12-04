<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class orderingPriceTest extends TestCase
{
   public function testcheckConnection(): void
   { require 'src\orderingPrice.php';
   
   
   $test1 = new deliverer();
   $Name = 'id15421026_affan';
   $password = 'Rj!cId5d+)xiYL$7';
   $database = 'id15421026_diningdelivery';
   $balance = 50.0;
   $cost = 20.0;
   $finalBalance = $balance - $cost;
   
   
       $result = $test1->priceTransaction($Name,$password, $database, $balance, $cost);
	   $this->assertEquals($finalBalance, $result);
       //this test returns true if the final balance was calculated correctly by subtracting cost from the initial balance;
   }
  
}