


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


<h2> Your Current Order </h2>

<?php


if($_SESSION['orderIDnumber'] == NULL){
	
	echo "You Currently Are Not Deliverying An Order";
} else {
$one = $_SESSION['orderIDnumber'];
$two = $_SESSION['orderListItems'];
echo nl2br ("Your Current Order: " . "\n");
echo nl2br ("Order ID: " . $one . "\n");
echo nl2br ("Order Item(s): " . $two . "\n");	
	
	
}



?>






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