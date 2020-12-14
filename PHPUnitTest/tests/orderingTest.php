<?
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class orderingTest extends TestCase
{
   public function testcheckConnection(): void
   { require 'src\ordering.php';
   
   
   $test1 = new deliverer();
   $Name = 'id15421026_affan';
   $password = 'Rj!cId5d+)xiYL$7';
   $database = 'id15421026_diningdelivery';
   $orderList = 'Fries(x1), Orange Juice(x1), Water Bottle(x1)';
       
	   $this->assertNotNull($test1->orderListCheck($Name,$password, $database, $orderList));
       //this test returns true if the order list is not empty
   }
  
}