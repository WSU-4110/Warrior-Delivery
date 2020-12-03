<?php

session_start();

$user_value = $_SESSION['login_user'];

if($user_value == NULL){
	header("Location: KitchenLogin.html");

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

<a href="ProfilePageKitchen.php" style="background:none;border:none;display:inline-block;margin:0px;">

<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Warrior Delivery</h1><br>

<br>

<a href='ProfilePageKitchen.php'>Home</a>

 

<h2> Current Authenticated Registered Accounts </h2>
<?php
   $db = new mysqli('localhost','root','','diningdelivery');
   
   $sql = "SELECT user_id, username, hasOrder, order_id, Authentication FROM delivererlogin WHERE Authentication = '1'";
   
   $result = mysqli_query($db,$sql);
   
   while($row = mysqli_fetch_array($result)){
	   
	   echo nl2br ("User ID: " . $row['user_id'] . " Name: " . $row['username'] . " Has Order?: " . $row['hasOrder'] . " Order ID: " . $row['order_id'] . " Authentication: " . $row['Authentication']  . "\n");
	   
   }


?>


<h2> Current UnAuthenticated Accounts </h2>
<?php
$sql = "SELECT user_id, username, hasOrder, order_id, Authentication FROM delivererlogin WHERE Authentication = '0'";


$result = mysqli_query($db,$sql);

while($row = mysqli_fetch_array($result)){
	   



	   echo nl2br ("User ID: " . $row['user_id'] . " Name: " . $row['username'] . " Authentication: " . $row['Authentication']  . "\n");
	   
   }


?>


<h2> Verify Delivery Account Here </h2>
<form action = "verify.php" method="post">
<select id="accounts" name="accounts">
	<option> Select Account </option>
	
<?php
$sql = "SELECT user_id, username, hasOrder, order_id, Authentication FROM delivererlogin WHERE Authentication = '0'";
$result = mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($result)){

?>
			<option value="<?php echo ($row['username']); ?>"><?php echo ($row['username']); ?></option>
<?php
		}
?>


	
</select>
<input type="submit" onclick="return confirm('Are you sure you want to verify the account?')" value="Submit">
</form>

<br>


<a href = "ProfilePageKitchen.php">Go Back</a><br>
<a href = "LogOut.php">Sign Out</a>


</body>
</html>