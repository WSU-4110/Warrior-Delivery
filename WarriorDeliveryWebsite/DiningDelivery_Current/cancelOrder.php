<?php


session_start();
	$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
	$nameofuser = $_POST['cancelOrder'];
	$reason = $_POST['reason'];

	$sql = "SELECT user_name FROM orderlist WHERE order_id = '$nameofuser'";
$result = mysqli_query($db,$sql);

$value = mysqli_fetch_assoc($result);
  
	
   //echo $value['order_id'];
   $sql = "DELETE FROM orderlist WHERE order_id = '$nameofuser'";
   
   //$sql = "UPDATE delivererlogin SET hasOrder = '1', order_id = '$currentOrder' WHERE username = '$nameofuser'";
	$result = mysqli_query($db,$sql);


 
   $myusername = $value['user_name'];

	//echo $nameofuser;

	$message = "Hello " . $myusername . "!, Unfortunately your order has been cancelled!";

	$title = "Your WSU Dining Delivery Order ID: " . $nameofuser . " has been cancelled";
   
   //mail('afnanatif@gmail.com', $title, $message, 'From: WSU Dining Delivery <wsudiningdelivery@gmail.com>');
	
?>