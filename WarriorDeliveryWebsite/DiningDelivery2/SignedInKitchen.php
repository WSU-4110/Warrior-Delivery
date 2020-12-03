<?php

session_start();

$user_value = $_SESSION['login_user'];

echo "Welcome " . $user_value . "!";



?>
<!DOCTYPE html>
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  </head>
<body>

<br>
<br>
<br>

<h2> Current Orders That Have Not Been Made </h2>


<?php
   $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
   
  $sql = "SELECT order_id, user_name, order_item, status FROM orderlist WHERE status = '3'";
   
   $result = mysqli_query($db,$sql);
   
   while($row = mysqli_fetch_array($result)){
	   
	   echo nl2br ("Order ID: " . $row['order_id'] . " Name: " . $row['user_name'] . " Order: " . $row['order_item'] . "STATUS: " . $row['status'] . "\n");
	   
   }


?>




<br>

<h2> Orders That Are Ready for Pickup </h2>

<?php
   $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
   
  $sql = "SELECT order_id, user_name, order_item, status FROM orderlist WHERE status = '0'";
   
   $result = mysqli_query($db,$sql);
   
   while($row = mysqli_fetch_array($result)){
	   
	   echo nl2br ("Order ID: " . $row['order_id'] . " Name: " . $row['user_name'] . " Order: " . $row['order_item'] . "STATUS: " . $row['status'] . "\n");
	   
   }


?>

<br>

<h2> Orders that are out for delivery </h2>

<?php
   $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
   
  $sql = "SELECT order_id, user_name, order_item, status FROM orderlist WHERE status = '1'";

   
   $result = mysqli_query($db,$sql);


   while($row = mysqli_fetch_array($result)){

   	$compare = $row['order_id'];
	   
	    $sql2 = "SELECT username FROM delivererlogin WHERE order_id = '$compare'";

		$result2 = mysqli_query($db,$sql2);
	   $row2 = mysqli_fetch_assoc($result2);
	   
	   
	   echo nl2br ("Order ID: " . $row['order_id'] . " Name: " . $row['user_name'] . " Order: " . $row['order_item'] . "STATUS: " . $row['status'] . "Claimed By: " . $row2['username'] . "\n");
	   
   }


?>


<h2> Current Authenticated Registered Accounts </h2>
<?php
   $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
   
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

<p> This is the list of registered authenticated users and the list of accounts that have orders and what order they have been assigned. </p>

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



<h2> Cancel Order Here </h2>
<p> If you would like to cancel an order, please select the Order ID and select a reason. This will notify the student through email. </p>


<form action = "cancelOrder.php" method="post">
<select id="cancelOrder" name="cancelOrder">
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
<select id="reason" name="reason">
	<option> Please Select A Reason </option>
	<option name="reason1"> Kitchen ran out of item(s) </option>
	<option name="reason2"> Student has cancelled order </option>
	<option name="reason2"> Order placed near closing time </option>

</select>
<input type="submit" onclick="return confirm('Are you sure you want to cancel the order?')" value="Submit">
</form>






<br>
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

<h2><a href = "logout.php">Sign Out</a></h2>

</body>


<script>

	function doubleCheck(){

		confirm("Are you sure you want to cancel the order?");

	}
</script>

</html>
   
