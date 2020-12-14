<?php

declare(strict_types=1);

final class deliverer

{

  
  public function countValuesHere(string $Name, string $password, string $database, string $firstname, string $lastname, string $access_id, string $username)

   {

       if($Name == NULL || $password == NULL || $database == NULL){
	   
	   return 0;
	   }else{
		   
		   
		   if ($Name == 'id15421026_affan' && $password == 'Rj!cId5d+)xiYL$7' && $database == 'id15421026_diningdelivery'){
		  
		  return ($firstname + $lastname + $access_id + $username);
		  
		   }else{
			return 0;   
		   }
	   }

   }

  





}