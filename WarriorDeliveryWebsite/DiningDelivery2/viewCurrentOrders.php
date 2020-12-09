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

?>

<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif">
	<title>Warrior Delivery</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<a href="ProfilePageDeliverer.php" style="background:none;border:none;display:inline;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="max-width:10%;"></a>
<h1 class="title">View Current Order</h1><br>

<nav>
	<a  href='ProfilePageDeliverer.php'>Home</a>
	<a style="float:right" href="LogOut.php">Sign Out</a>
	<a style="float:right" href="YourInfoD.php">Your info</a>
	<a style="float:right" href="ChangePasswordDeliverer.html">Change Password</a>
</nav>
  
<br>

<h2> Your Current Order Details</h2>

<?php


 $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');

 $sql = "SELECT order_id, hasOrder FROM delivererlogin WHERE access_id = '$user_value'";
  $result = mysqli_query($db,$sql);
  
  $value = mysqli_fetch_assoc($result);
$compare = $value['order_id'];

$sql2 = "SELECT location, style, phone, order_item, comment FROM orderlist WHERE order_id = '$compare'";
$result2 = mysqli_query($db,$sql2);
$value2 = mysqli_fetch_assoc($result2);



if($value['hasOrder'] == 0){
	
    echo "<b>You are currently not delivering an order!</b><br>";
	
} else{
    
?>

<table style=>
	<thead>	
		<th>Order ID</th>
		<th>Order Item(s)</th>
		<th>Location</th>
		<th>Style</th>
		<th>Phone</th>
		<th>Comment</th>
		
	</thead>
	
	<tbody>
		<tr>
	
	<td> <?php echo $value['order_id']?> </td>
	<td> <?php echo $value2['order_item']; ?> </td>
	<td> <?php echo $value2['location']; ?> </td>
	<td> <?php echo $value2['style']; ?> </td>
	<td> <?php echo $value2['phone']; ?> </td>
	<td> <?php echo $value2['comment']; ?> </td>
	</tr>
	
	</tbody>
	
</table>

<?php

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