<?php

session_start();

$user_value = $_SESSION['login_user'];

if($user_value == NULL){
    
    ?>
 <script>
	window.location.replace("DelivererLoginPage.html");
	</script>
	<?php
	exit();
	
}


$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
 $sql = "SELECT firstname FROM delivererlogin WHERE access_id = '$user_value'";
  $result = mysqli_query($db,$sql);
 $value = mysqli_fetch_array($result);


?>




<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Warrior Delivery</title>
</head>
<body>
<a href="ProfilePageDeliverer.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Warrior Delivery</h1><br>

<br>
<a href='ProfilePageDeliverer.php'>Home</a>
  



<br>
<?php

echo "<h1>Welcome " . $value['firstname'] . "!</h1>";
?>
<br>

<a href='viewAvailableOrdersD.php'>Pick up an order!</a><br>
<a href='viewCurrentOrders.php'>View Current Order</a><br>
<a href='YourInfoD.php'>Your Info</a><br>
<a href='ChangePasswordDeliverer.html'>Change Password</a><br>
<a href = "LogOut.php">Sign Out</a>


</body>
</html>