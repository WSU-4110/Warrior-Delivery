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
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif">
	<title>Warrior Delivery</title>
</head>
<body>

<a href="ProfilePageDeliverer.php" style="background:none;border:none;display:inline;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="max-width:10%;"></a>
<h1 class="title">Deliverer Profile</h1><br>

<nav>
	<a class="on" href='ProfilePageDeliverer.php'>Home</a>
	<a style="float:right" href="LogOut.php">Sign Out</a>
	<a style="float:right" href="YourInfoD.php">Your info</a>
	<a style="float:right" href="ChangePasswordDeliverer.html">Change Password</a>
</nav>

<br>
<?php

echo "<h1>Welcome " . $value['firstname'] . "!</h1>";
?>
<br>

<a class="side" href='viewAvailableOrdersD.php'>Pick up an order!</a><br>
<a class="side" href='viewCurrentOrders.php'>View Current Order</a><br>

</body>
</html>