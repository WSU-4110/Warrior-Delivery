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


<h2> Current Available Orders </h2>
<?php
   $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
   
   $sql = "SELECT order_id, user_name, order_item, status FROM orderlist WHERE status = '0'";
   
   $result = mysqli_query($db,$sql);
   
   while($row = mysqli_fetch_array($result)){
	   
	   echo nl2br ("Order ID: " . $row['order_id'] . " Name: " . $row['user_name'] . " Order: " . $row['order_item'] . "STATUS: " . $row['status'] . "\n");
	   
   }




?>

<p> When you click "Accept Order", you will be given the most prioritized order, which 
correlates to the oldest entry in the queue. 
You will only be allowed to take on one order at a time only. Once finished, 
click the "Finished" button to verify the completion of the order. Thank you! </p>

<br>
<button onclick="assignOrder()">Receive Order!</button><br>
<br>
<button onclick="completedOrder()">Completed Order</button><br>



<h2><a href = "viewCurrentOrders.php">View Current Order</a></h2><br>

<h2><a href = "logout.php">Sign Out</a></h2>

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
</html>
   
