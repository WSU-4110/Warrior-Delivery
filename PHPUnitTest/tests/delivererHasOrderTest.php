<?
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class delivererHasOrderTest extends TestCase
{
   public function testcheckConnection(): void
   { require 'src\delivererHasOrder.php';
   
   
   $test1 = new deliverer();
   $Name = 'id15421026_affan';
   $password = 'Rj!cId5d+)xiYL$7';
   $database = 'id15421026_diningdelivery';
   $hasOrder = '1';
       
	   
	   $result = $test1->checkHasOrder($Name,$password, $database, $hasOrder);
	   $this->assertEquals($result, '1');
       //deliverer is confirmed to have an order if true
   }
  
}