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

  

<h2> Incoming Orders </h2>


<?php
   $db = new mysqli('localhost','root','','diningdelivery');
   
  $sql = "SELECT order_id, user_name, order_item, status FROM orderlist WHERE status = '3'";
   
   $result = mysqli_query($db,$sql);
   
   while($row = mysqli_fetch_array($result)){
	   
	   echo nl2br ("Order ID: " . $row['order_id'] . " Name: " . $row['user_name'] . " Order: " . $row['order_item'] . "STATUS: " . $row['status'] . "\n");
	   
   }


?>

<br>
<h2> Update Order Status </h2>

<p> Please select the Order ID that is ready to be picked up by the deliverer and click submit </p>
<form action = "updateStatus.php" method="post">
<select id="updateStatus" name="updateStatus">
	<option> Select Order ID </option>
	
<?php
$sql = "SELECT order_id FROM orderlist WHERE status = '3'";
$result = mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($result)){

?>
			<option value="<?php echo ($row['order_id']); ?>"><?php echo ($row['order_id']); ?></option>
<?php
		}
?>


	
</select>
<input type="submit" onclick="return confirm('Are you sure you want to update the order status?')" value="Submit">
</form>

<br>
<a href = "ProfilePageKitchen.php">Go Back</a><br>
<a href = "LogOut.php">Sign Out</a>


</body>
</html>