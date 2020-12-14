<?
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class DelivererEmailTest extends TestCase
{
   public function testThatIsCreatedForGmailAddress(): void
   { require 'src\Email.php';
       $this->assertInstanceOf(
           Email::class,
           Email::fromString('user@gmail.com')
       );
   }
   public function testThatIsNotCreatedForGmailAddress(): void
   {
       $this->expectException(InvalidArgumentException::class);
       Email::fromString('invalid');
   }
   public function testPrintAsString(): void
   {
       $this->assertEquals(
           'user@gmail.com',
           Email::fromString('user@gmail.com')
       );
   }
}