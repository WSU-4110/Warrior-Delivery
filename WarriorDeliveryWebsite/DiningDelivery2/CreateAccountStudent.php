<?php
  
   $db = new mysqli('localhost','root','','diningdelivery');
	
  
      // username and password sent from form 
      
	  $myemail = $_POST['email'];
      $myusername = $_POST['username'];
      $mypassword = $_POST['password'];
	  $myID = $_POST['SID'];
	  $myfirstname = $_POST['firstname'];
	  $mylastname = $_POST['lastname'];
	  $hash = md5(rand(0,1000));
      
	  

      $sql = "INSERT INTO `testvalues`(`user_id`, `email`, `access_id`, `firstname`, `lastname`, `user_name`, `user_password`, `hash`) VALUES (NULL, '$myemail', '$myID', '$myfirstname', '$mylastname', '$myusername','$mypassword', '$hash')";
      $result = mysqli_query($db,$sql);
	  
	 echo "Account Created!";
   
   
	 
	
   
   
   
   
   
   
?>