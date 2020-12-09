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
<a href="index.html" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<br>
</body>
</html>


<?php
  
   $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
  
     $email = $_GET['email'];
	 $hash = $_GET['hash'];
	 
	 $sql = "UPDATE testvalues SET Authenticated = '1' WHERE email = '$email' AND hash='$hash'";
	 
	 $result = mysqli_query($db,$sql);
	 
      if(mysqli_query($db,$sql)){
		  
		  echo "<h3>Your account has been verified! You can now sign in using the Student Log-in!</h3><br>";
		  
	  }
	 
	
   
   
   
   
   
   
?>
<a href='StudentLogin.html'>Log-In</a><br>

</body>
</html>