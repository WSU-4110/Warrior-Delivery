<?php
  
   $db = new mysqli('localhost','root','','diningdelivery');
	
  
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "INSERT INTO `delivererlogin`(`user_id`, `username`, `password`, `hasOrder`, `order_id`) VALUES (NULL,'$myusername','$mypassword', '0', NULL)";
      $result = mysqli_query($db,$sql);
	  
	 echo "Account Created!";
   
   
	 
	
   
   
   
   
   
   
?>