<?php
session_start();
?>


<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Order Cancelled | Warrior Delivery</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Order Cancelled | Warrior Delivery</h1><br>

<br>
<a href='ProfilePage.php'>Home</a>



<?php


	$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
	$nameofuser = $_POST['cancelOrder'];
	$user_value = $_SESSION['login_user'];

	$sql = "DELETE from orderlist WHERE order_id = '$nameofuser'";
$result = mysqli_query($db,$sql);


  


 
   //$myusername = $value['user_name'];


	  
	  echo "<h3> Item Deleted! </h3>";
	  
	  
  


	//echo $nameofuser;

	//$message = "Hello " . $myusername . "!, Unfortunately your order has been cancelled!";

//	$title = "Your WSU Dining Delivery Order ID: " . $nameofuser . " has been cancelled";
   
   //mail('afnanatif@gmail.com', $title, $message, 'From: WSU Dining Delivery <wsudiningdelivery@gmail.com>');
	
?>







</body>

</html>