<?php

session_start();

$user_value = $_SESSION['login_user'];

if($user_value == NULL){
	header("Location: DelivererLoginPage.html");
	exit();
	
}

?>




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
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Warrior Delivery</h1><br>

<br>
<a href='ProfilePageDeliverer.php'>Home</a>
  



<br>


<h2> Current Orders Available for Pick Up </h2>

<?php
   $db = new mysqli('localhost','root','','diningdelivery');
   
   $sql = "SELECT order_id, user_name, order_item, status FROM orderlist WHERE status = '0'";
   
   $result = mysqli_query($db,$sql);
   
   while($row = mysqli_fetch_array($result)){
	   
	   echo nl2br ("Order ID: " . $row['order_id'] . " Name: " . $row['user_name'] . " Order: " . $row['order_item'] . "STATUS: " . $row['status'] . "\n");
	   
   }




?>


<p> When you click "Accept Order", you will be given the most prioritized order, which 
correlates to the oldest entry in the queue. 
You will only be allowed to take on one order at a time only. Once finished, 
click the "Finished" button to verify the completion of the order. Thank you! </p>

<br>
<button onclick="assignOrder()">Receive Order!</button><br>
<br>
<button onclick="completedOrder()">Completed Order</button><br><br>

<a href = "viewCurrentOrders.php">View Current Order</a><br>


</body>

<script>

function assignOrder(){


$.ajax({

	url: "assignOrdering.php",
	method: "post",
	data: {send: '1'},
	success: function(res){
	console.log(res);
	}
})

alert("Order Assigned!");

}

function completedOrder(){


$.ajax({

	url: "completedOrdering.php",
	method: "post",
	data: {send: '1'},
	success: function(res){
	console.log(res);
	}
})

alert("Order Completed!");

}
</script>


<br>
<a href = "ProfilePageDeliverer.php">Go Back</a><br>
<a href = "LogOut.php">Sign Out</a>


</body>
</html>