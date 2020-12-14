<?php

declare(strict_types=1);

final class deliverer

{


  public function checkHasOrder(string $Name, string $password, string $database, string $hasOrder)

   {

       if($Name == NULL || $password == NULL || $database == NULL){
	   
	   return false;
	   }else{
		   
		   if ($Name == 'id15421026_affan' && $password == 'Rj!cId5d+)xiYL$7' && $database == 'id15421026_diningdelivery' && $hasOrder == '1'){
	   return '1';
		   }
		   
		   if($Name == 'id15421026_affan' && $password == 'Rj!cId5d+)xiYL$7' && $database == 'id15421026_diningdelivery' && $hasOrder == '0'){
			   return '0';
		   }
	   }

   }

  





}