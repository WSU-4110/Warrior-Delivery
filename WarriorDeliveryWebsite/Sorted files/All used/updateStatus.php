<?php


session_start();
	$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
	$nameofuser = $_POST['updateStatus'];
	

	$sql = "UPDATE orderlist SET status = '0' WHERE order_id = '$nameofuser'";
$result = mysqli_query($db,$sql);


   
	
?>


<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Order Status Updated</title>
</head>
<body>
<a href="ProfilePageKitchen.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Order Status Changed | WSU Dining Delivery</h1><br>

<br>
<a href='ProfilePageKitchen.php'>Home</a>
  



<br>


<h2> Order status has been changed. </h2>



<br>
<br>
<a href='ProfilePageKitchen.php'>Go Back</a><br>



</body>
</html>