<?php

declare(strict_types=1);

final class deliverer

{

  
  public function checkConnection(string $Name, string $password, $database)

   {

       if($Name == NULL || $password == NULL || $database == NULL){
	   
	   return false;
	   }else{
		   
		   if ($Name == 'id15421026_affan' && $password == 'Rj!cId5d+)xiYL$7' && $database == 'id15421026_diningdelivery'){
	   return true;
		   }else{
			   return false;
		   }
	   }

   }

  





}