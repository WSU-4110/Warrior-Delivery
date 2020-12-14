<?
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
   public function testThatIsCreatedFromWayneEmailAddress(): void
   { require 'src\Email.php';
       $this->assertInstanceOf(
           Email::class,
           Email::fromString('user@wayne.edu')
       );
   }
   public function testThatIsNotCreatedFromWayneEmailAddress(): void
   {
       $this->expectException(InvalidArgumentException::class);
       Email::fromString('invalid');
   }
   public function testPrintAsString(): void
   {
       $this->assertEquals(
           'user@wayne.edu',
           Email::fromString('user@wayne.edu')
       );
   }
}