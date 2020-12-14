<?
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class delivererEmailTest extends TestCase
{
   public function testcheckEmail(): void
   { require 'src\delivererEmail.php';
   
   
   $test1 = new deliverer();
   $email = 'ga3010@wayne.edu';
   $authentication = '1';
       
	   $this->assertTrue($test1->checkEmail( $email, $authentication));
       //returns true if it properly checks if the account is authenticated
   }
  
}