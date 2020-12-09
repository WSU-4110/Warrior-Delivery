<?php

session_start();


$user_value = $_SESSION['login_user'];

if($user_value == NULL){
 ?>
 <script>
	window.location.replace("StudentLogin.html");
	</script>
	<?php
	exit();
	
}

 
 
 

$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
 $sql = "SELECT firstname FROM testvalues WHERE access_id = '$user_value'";
  $result = mysqli_query($db,$sql);
 $value = mysqli_fetch_array($result);
 
 $user = $value['firstname'];

?>




<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="themeS.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Profile Page Student</title>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Student Profile Page | WSU Dining Delivery</h1><br>

<br>

  



<br>
<?php

echo "<h1>Welcome " . $user . "!</h1>";

?>
<br>
<nav>
    <a class="btn" href='Ordering.php'>Order</a><br>
<a class="btn" href='StudentOrderStatus.php'>Check Order Status</a><br>
<a class="btn" href='CheckBalance.php'>Check Balance</a><br>
<a class="btn" href = "AddBalance.php">Add Balance</a><br>
<a class="btn" href='ViewOrderHistory.php'>View Order History</a><br>
<a class="btn" href='CancelOrderS.php'>Cancel Order</a><br>
<a class="btn" href = "YourInfoS.php">Your Information</a><br>
<a class="btn" href = "ChangePassword.html">Change Password</a><br><br>
<a class="btn" href = "LogOut.php">Sign Out</a>

    </nav>


</body>
</html>