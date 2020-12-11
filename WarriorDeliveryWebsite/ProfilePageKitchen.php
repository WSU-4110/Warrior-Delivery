<?php

session_start();

$user_value = $_SESSION['login_user'];

if($user_value == NULL){
    
    ?>
    
    <script>
	window.location.replace("index.html");
	</script>
	<?php
	exit();
	
}

?>




<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="themeS.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Warrior Delivery</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<a href="ProfilePageKitchen.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Warrior Delivery</h1><br>

<br>
    <nav>
    &nbsp&nbsp&nbsp<a class="btn" href='ProfilePageKitchen.php'>Home</a>
    </nav>

  



<br>

<h1> &nbsp Kitchen Admin Page </h1>
<br>
    <nav>
&nbsp&nbsp&nbsp<a class="btn" href = "OrdersReadyForPickup.php">Orders for Pickup</a><br>
&nbsp&nbsp&nbsp<a class="btn" href = "OrdersNotMade.php"> Incoming Orders</a><br>
&nbsp&nbsp&nbsp<a class="btn" href = "OrdersInDelivery.php">Orders in Delivery</a><br>
&nbsp&nbsp&nbsp<a class="btn" href = "CancelOrderK.php">Cancel Order</a><br>
&nbsp&nbsp&nbsp<a class="btn" href = "EditMenu.php">Edit Menu</a><br>
&nbsp&nbsp&nbsp<a class="btn" href = "Authentication.php">Authentication</a><br>
&nbsp&nbsp&nbsp<a class="btn" href = "LogOut.php">Sign Out</a>
    </nav>




</body>
</html>