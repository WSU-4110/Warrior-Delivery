<?
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AddBalanceQueryClassTest extends TestCase
{
   public function testAddBalance(): void
   { require 'src\AddBalanceQueryClass.php';
   
    $Y = new AddBalanceQueryClass();
    
    $this->assertSame(30, $Y->addBalance(30));
   }
  
} 