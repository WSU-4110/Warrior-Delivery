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
        <a class="btn" href='ProfilePageKitchen.php'>Home</a>
    </nav>

  
<h2> Cancel Order Here </h2>
<p> If you would like to cancel an order, please select the Order ID and select a reason. This will notify the student through email. </p>


<form action = "cancelOrder.php" method="post">
<select id="cancelOrder" name="cancelOrder">
	<option> Select Order ID </option>
	
<?php
$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
$sql = "SELECT order_id FROM orderlist WHERE status = '3'";
$result = mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($result)){

?>
			<option value="<?php echo ($row['order_id']); ?>"><?php echo ($row['order_id']); ?></option>
<?php
		}
?>


	
</select>
<select id="reason" name="reason">
	<option> Please Select A Reason </option>
	<option name="reason1"> Kitchen ran out of item(s) </option>
	<option name="reason2"> Student has cancelled order </option>
	<option name="reason2"> Order placed near closing time </option>

</select>
<input type="submit" onclick="return confirm('Are you sure you want to cancel the order?')" value="Submit">
</form>


<br>
    <nav>
        <a class="btn" href = "ProfilePageKitchen.php">Go Back</a><br>
        <a class="btn" href = "LogOut.php">Sign Out</a>
    </nav>



</body>
</html>