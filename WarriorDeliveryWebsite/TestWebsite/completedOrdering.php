<?php


session_start();
	$db = new mysqli('localhost','root','','diningdelivery');
	
	$nameofuser = $_SESSION['login_user'];
	$sql = "SELECT order_id FROM delivererlogin WHERE username = '$nameofuser'";
  echo $nameofuser;
  
  // $sql = "INSERT INTO `orderlist`(`order_id`, `user_name`, `order_item`) VALUES (NULL,'$nameofuser', '$_POST[send]')";
  $result = mysqli_query($db,$sql);
   $value = mysqli_fetch_assoc($result);
   
   $currentOrder = $value['order_id'];
   //echo $value['order_id'];
   $sql = "DELETE FROM orderlist WHERE order_id = '$currentOrder'";
   
   //$sql = "UPDATE delivererlogin SET hasOrder = '1', order_id = '$currentOrder' WHERE username = '$nameofuser'";
	$result = mysqli_query($db,$sql);
	
	
	$sql = "UPDATE delivererlogin SET hasOrder = '0', order_id = '0' WHERE username = '$nameofuser'";
	$result = mysqli_query($db,$sql);
	
	$_SESSION['orderIDnumber'] = 'None';
	$_SESSION['orderListItems'] = 'None';
	
	echo "Thank You!";
?>