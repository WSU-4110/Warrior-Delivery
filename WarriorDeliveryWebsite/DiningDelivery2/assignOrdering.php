<?php


session_start();
	$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
	$nameofuser = $_SESSION['login_user'];
	$sql = "SELECT order_id, order_item FROM orderlist WHERE status = '0' ORDER BY order_id ASC LIMIT 1";
  $_SESSION['orderIDnumber'] = 0;
  
  // $sql = "INSERT INTO `orderlist`(`order_id`, `user_name`, `order_item`) VALUES (NULL,'$nameofuser', '$_POST[send]')";
  $result = mysqli_query($db,$sql);
   $value = mysqli_fetch_assoc($result);
   
   $currentOrder = $value['order_id'];
   //echo $value['order_id'];
   
   $orderIDvalue = $value['order_id'];
   $orderList = $value['order_item'];
   
   $_SESSION['orderIDnumber'] = $orderIDvalue;
   $_SESSION['orderListItems'] = $orderList;
   
   $sql = "UPDATE delivererlogin SET hasOrder = '1', order_id = '$currentOrder' WHERE access_id = '$nameofuser'";
	$result = mysqli_query($db,$sql);
	
	
	$sql = "UPDATE orderlist SET status = '1' WHERE order_id = '$currentOrder'";
	$result = mysqli_query($db,$sql);
	
	
?>