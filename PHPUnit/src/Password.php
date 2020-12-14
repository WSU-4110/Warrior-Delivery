<?php

declare(strict_types=1);

final class Password

{

   private $password;

   private function __construct(string $password)

   {

       $this->takeAValidPassword($password);

       $this->password = $password;

   }

   public static function fromString(string $password): self

   {
       return new self($password);
   }

   public function __toString(): string

   {

       return $this->password;

   }

   private function takeAValidPassword(string $password): void

   {

       if (!filter_var($password, FILTER_VALIDATE_REGEXP, array( "options"=> array( "regexp" => "/.{6,25}/")))) {

           throw new InvalidArgumentException(

               sprintf('"%s" is not a valid password', $password));

       }

   }

}

