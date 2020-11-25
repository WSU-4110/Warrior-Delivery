<?php

session_start();

$user_value = $_SESSION['login_user'];

if($user_value == NULL){
	header("Location: StudentLogin.html");
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
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Warrior Delivery</h1><br>

<br>
<a href='ProfilePage.php'>Home</a>
  



<br>
<?php

echo "<h1>Welcome " . $user_value . "</h1>";

?>
<br>

<a href='Ordering.php'>Order</a><br>
<a href='StudentOrderStatus.php'>Check Order Status</a><br>
<a href='CheckBalance.php'>Check Balance</a><br>
<a href = "AddBalance.php">Add Balance</a><br>
<a href='ViewOrderHistory.php'>View Order History</a><br>
<a href = "YourInfoS.php">Your Information</a><br>
<a href = "LogOut.php">Sign Out</a>


</body>
</html>