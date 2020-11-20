<?php


session_start();
	$db = new mysqli('localhost','root','','diningdelivery');
	
	$nameofuser = $_POST['updateStatus'];
	

	$sql = "UPDATE orderlist SET status = '0' WHERE order_id = '$nameofuser'";
$result = mysqli_query($db,$sql);


   
	
?>