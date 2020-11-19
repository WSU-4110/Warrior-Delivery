<?php


session_start();
	$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
	$nameofuser = $_POST['updateStatus'];
	

	$sql = "UPDATE orderlist SET status = '0' WHERE order_id = '$nameofuser'";
$result = mysqli_query($db,$sql);


   
	
?>