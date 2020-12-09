<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="themeS.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif">
	<title>Warrior Delivery</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<a href="index.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<br>
</body>
</html>


<?php
  
     $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
  
      // username and password sent from form 
      
	  $myemail = $_POST['email'];
      $myusername = $_POST['username'];
      $mypassword = $_POST['password'];
	  $myID = $_POST['SID'];
	  $myfirstname = $_POST['firstname'];
	  $mylastname = $_POST['lastname'];
	  $hash = md5(rand(0,1000));
      
	  $sql = "SELECT access_id FROM testvalues WHERE access_id = '$myID'";
	  
	  $result = mysqli_query($db,$sql);
      $row = mysqli_num_rows($result);
	  
	  if ($row==1){
		  
		  
		  ?>
		  <h3> An account with this access id already exists, please use the forgot password page to reset your password. </h3>
        <nav>
         <a class="btn" href = "index.html">Go Back</a>
        </nav>
<br>
		 
		  <?php
		  
	  }else{

      $sql = "INSERT INTO `testvalues`(`user_id`, `email`, `access_id`, `firstname`, `lastname`, `user_name`, `user_password`, `hash`) VALUES (NULL, '$myemail', '$myID', '$myfirstname', '$mylastname', '$myusername','$mypassword', '$hash')";
      $result = mysqli_query($db,$sql);
	  
	 echo "<h3>Account Created!</h3><br>";
	 echo "<a href = index.html>Go Back</a><br>";
	 
	 
	   $subject = "WSU Dining Delivery Account Confirmation";
   
   $message = "Hello " . $myfirstname . '!
   
   Your student WSU Dining Delivery account has been created. 
   Before using the website, you must verify your account. To verify your account, please click on the following link:
   
   http://wsudiningdelivery.000webhostapp.com/verifyStudent.php?email='.$myemail.'&hash='.$hash.'
   
   WSU Dining Delivery
   
   ';
   
   $headers = 'From:wsudiningdelivery@gmail.com' . "\r\n";
   mail($myemail, $subject, $message, $headers);
	 
	 
	  }
   
	 
	
   
 
   
   
?>