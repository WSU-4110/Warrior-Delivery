<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PasswordTest extends TestCase
{
   public function testThatIsCreatedForValidPassword(): void
   { require 'src\Password.php';
       $this->assertInstanceOf(
           Password::class,
           Password::fromString('My Great Password')
       );
   }
   public function testThatIsNotCreatedForValidPassword(): void
   {
       $this->expectException(InvalidArgumentException::class);
       Password::fromString('invalid');
   }
   public function testPrintAsString(): void
   {
       $this->assertEquals(
           'My Great Password',
           Password::fromString('My Great Password')
       );
   }
}