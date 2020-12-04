<?php

declare(strict_types=1);

final class deliverer

{

  
  public function orderListCheck(string $Name, string $password, string $database, string $orderList)

   {

       if($Name == NULL || $password == NULL || $database == NULL){
	   
	   return NULL;
	   }else{
		   
		   if ($Name == 'id15421026_affan' && $password == 'Rj!cId5d+)xiYL$7' && $database == 'id15421026_diningdelivery'){
			   
					if($orderList == NULL){
						
						return NULL;
					}else{
						
						return '1';
					}
			   
	   
		   }else{
			   return false;
		   }
	   }

   }

  





}