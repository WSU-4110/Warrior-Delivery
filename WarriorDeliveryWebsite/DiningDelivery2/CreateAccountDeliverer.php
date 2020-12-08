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
  
   $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
  
      // username and password sent from form 
      
	  
	  
	 // $_SESSION['orderIDnumber'] = $orderIDvalue;
	  
	  $myfirstname = $_POST['firstname'];
	  $mylastname = $_POST['lastname'];
	  $myID = $_POST['SID'];
	  $myemail = $_POST['email'];
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
	  
	  
	  $sql = "SELECT access_id FROM delivererlogin WHERE access_id = '$myID'";
	  
	  $result = mysqli_query($db,$sql);
      $row = mysqli_num_rows($result);
	  
	  if ($row==1){
		  
		  
		  ?>
		  <h3> An account with this access id already exists, please use the forgot password page to reset your password. </h3>
		  <a href = "Homepage.html">Go Back</a><br>
		  <?php
		  
	  }else{
		  
		   $sql = "INSERT INTO `delivererlogin`(`user_id`, `email`, `access_id`, `firstname`, `lastname`, `username`, `password`, `hasOrder`, `order_id`) VALUES (NULL,'$myemail', '$myID', '$myfirstname', '$mylastname', '$myusername','$mypassword', '0', NULL)";
      $result = mysqli_query($db,$sql);
	  
	 echo "<h3>Account Created!</h3><br>";
	 echo "<a href = index.html>Go Back</a><br>";
	 
	 $subject = "WSU Dining Delivery Account Confirmation";
   
   $message = "Hello " . $myfirstname . '!
   
   Your deliverer WSU Dining Delivery account has been created. 
   Before using the website, WSU Dining Delivery must manually verify your account before you can accept orders. Please
   wait for verification before signing in. Verification may take up to a week to register.
   
   If you have any questions, please email us at wsudiningdelivery@gmail.com
   
   WSU Dining Delivery
   
   ';
   
   $headers = 'From:wsudiningdelivery@gmail.com' . "\r\n";
   mail($myemail, $subject, $message, $headers);
	 
	 
	 
	 
	 
	  }
      
     
   
   
	 
	
   
   
   
   
   
   
?>