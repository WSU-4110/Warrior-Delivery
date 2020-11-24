<?php
  
   $db = new mysqli('localhost','root','','diningdelivery');
	
  
      // username and password sent from form 
      
	  
	  $myfirstname = $_POST['firstname'];
	  $mylastname = $_POST['lastname'];
	  $myID = $_POST['SID'];
	  $myemail = $_POST['email'];
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "INSERT INTO `delivererlogin`(`user_id`, `email`, `access_id`, `firstname`, `lastname`, `username`, `password`, `hasOrder`, `order_id`) VALUES (NULL,'$myemail', '$myID', '$myfirstname', '$mylastname', '$myusername','$mypassword', '0', NULL)";
      $result = mysqli_query($db,$sql);
	  
	 echo "Account Created!";
   
   
	 
	
   
   
   
   
   
   
?>