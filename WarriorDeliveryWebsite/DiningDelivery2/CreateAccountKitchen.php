<?php
  
   $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
  
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "INSERT INTO `kitchenlogin`(`user_id`, `user_name`, `user_password`) VALUES (NULL,'$myusername','$mypassword')";
      $result = mysqli_query($db,$sql);
	  
	 echo "Account Created!";
   
   
	 
	
   
   
   
   
   
   
?>