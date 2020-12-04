<?php

declare(strict_types=1);

final class deliverer

{


  
  public function checkEmail(string $email, string $authentication)

   {

       if($email == NULL || $authentication == NULL){
	   
	   return false;
	   }else{
		   
		   if ($authentication == '1'){
	   return true;
		   }else{
			   return false;
		   }
	   }

   }

  





}