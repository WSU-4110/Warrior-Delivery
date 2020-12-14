<?php

declare(strict_types=1);

final class deliverer

{

  
  public function priceTransaction(string $Name, string $password, string $database, float $balance, float $cost)

   {

       if($Name == NULL || $password == NULL || $database == NULL){
	   
	   return 0;
	   }else{
		   
		   
		   if ($Name == 'id15421026_affan' && $password == 'Rj!cId5d+)xiYL$7' && $database == 'id15421026_diningdelivery'){
		  $balance = $balance - $cost;
		  return $balance;
		  
		   }else{
			return 0;   
		   }
	   }

   }

  





}