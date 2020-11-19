<?php


session_start();
	$db = new mysqli('localhost','root','','diningdelivery');
	
	$nameofuser = $_SESSION['login_user'];
	$sql = "SELECT order_id, order_item FROM orderlist WHERE status = '0' ORDER BY order_id ASC LIMIT 1";
  
  
  // $sql = "INSERT INTO `orderlist`(`order_id`, `user_name`, `order_item`) VALUES (NULL,'$nameofuser', '$_POST[send]')";
  $result = mysqli_query($db,$sql);
   $value = mysqli_fetch_assoc($result);
   
   $currentOrder = $value['order_id'];
   //echo $value['order_id'];
   
   $orderIDvalue = $value['order_id'];
   $orderList = $value['order_item'];
   
   $_SESSION['orderIDnumber'] = $orderIDvalue;
   $_SESSION['orderListItems'] = $orderList;
   
   $sql = "UPDATE delivererlogin SET hasOrder = '1', order_id = '$currentOrder' WHERE username = '$nameofuser'";
	$result = mysqli_query($db,$sql);
	
	
	$sql = "UPDATE orderlist SET status = '1' WHERE order_id = '$currentOrder'";
	$result = mysqli_query($db,$sql);
?>