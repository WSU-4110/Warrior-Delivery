<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Warrior Delivery</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<a href="ProfilePageDeliverer.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<br>
</body>
</html>


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
      
	  $sql = "SELECT access_id FROM delivererlogin WHERE access_id = '$myID'";
	  
	  $result = mysqli_query($db,$sql);
      $row = mysqli_num_rows($result);
	  
	  if ($row==1){
		  
		  
		  ?>
		  <h3> An account with this access id already exists, please use the forgot password page to reset your password. </h3>
		  <a href = "Homepage.html">Go Back</a><br>
		  <?php
		  
	  }else{

      $sql = "INSERT INTO `testvalues`(`user_id`, `email`, `access_id`, `firstname`, `lastname`, `user_name`, `user_password`, `hash`) VALUES (NULL, '$myemail', '$myID', '$myfirstname', '$mylastname', '$myusername','$mypassword', '$hash')";
      $result = mysqli_query($db,$sql);
	  
	 echo "<h3>Account Created!</h3><br>";
	 echo "<a href = Homepage.html>Go Back</a><br>";
	  }
   
	 
	
   
   
   
   
   
   
?>