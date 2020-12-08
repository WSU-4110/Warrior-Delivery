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
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Warrior Delivery</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<a href="ProfilePageDeliverer.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Warrior Delivery</h1><br>

<br>
<a href='ProfilePageDeliverer.php'>Home</a>
  



<br>


<h2> Current Orders Available for Pick Up </h2>
<table style="width:40%">
	<thead>	
		<th>Order ID</th>
		<th>Access ID</th>
		<th> Order Item(s)</th>
		<th> Status</th>
		
	</thead>
<?php
   $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
   
   $sql = "SELECT order_id, access_id, order_item, status FROM orderlist WHERE status = '0'";
   
   $result = mysqli_query($db,$sql);
   
   while($row = mysqli_fetch_array($result)){
       
       ?>
	
	
	<tbody>
		<tr>
	
	<td> <?php echo $row['order_id']; ?> </td>
	<td> <?php echo $row['access_id']; ?> </td>
	<td> <?php echo $row['order_item']; ?> </td>
	<td> <?php echo $row['status']; ?> </td>
	</tr>
	
	
	    
	    <?php
}




?>
</tbody>
	
</table>

<p> When you click "Accept Order", you will be given the most prioritized order, which 
correlates to the oldest entry in the queue. 
You will only be allowed to take on one order at a time only. Once finished, 
click the "Finished" button to verify the completion of the order. Thank you! </p>

<br>
<button onclick="assignOrder()">Receive Order!</button><br>
<br>
<button onclick="completedOrder()">Completed Order</button><br><br>

<a href = "viewCurrentOrders.php">View Current Order</a><br>


</body>

<script>

function assignOrder(){



<?php

$sql = "SELECT hasOrder FROM delivererlogin WHERE access_id = '$user_value'";
   
   $result = mysqli_query($db,$sql);
   
   $row = mysqli_fetch_array($result);
   
   $checkValue = $row['hasOrder'];
?>


if (<?php echo $checkValue; ?> == 0){


$.ajax({

	url: "assignOrdering.php",
	method: "post",
	data: {send: '1'},
	success: function(res){
	console.log(res);
	}
})

alert("Order Assigned!");

	window.location.replace("assignOrderConfirmation.php");
}else{
    
 alert("You are already assigned an order. Please complete the order first before receiving another one.");
    
    
}
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

window.location.replace("assignOrderCompleted.php");

}
</script>


<br>
<a href = "ProfilePageDeliverer.php">Go Back</a><br>
<a href = "LogOut.php">Sign Out</a>


</body>
</html>