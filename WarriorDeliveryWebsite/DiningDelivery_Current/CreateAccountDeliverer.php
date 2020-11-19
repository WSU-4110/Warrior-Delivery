<?php
  
   $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
  
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "INSERT INTO `delivererlogin`(`user_id`, `username`, `password`, `hasOrder`, `order_id`) VALUES (NULL,'$myusername','$mypassword', '0', NULL)";
      $result = mysqli_query($db,$sql);
	  
	 echo "Account Created!";
   
   
	 
	
   
   
   
   
   
   
?>