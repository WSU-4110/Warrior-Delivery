<?php


session_start();
	$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
	$nameofuser = $_SESSION['login_user'];
	$sql = "SELECT order_id FROM delivererlogin WHERE access_id = '$nameofuser'";
  echo $nameofuser;
  
  // $sql = "INSERT INTO `orderlist`(`order_id`, `user_name`, `order_item`) VALUES (NULL,'$nameofuser', '$_POST[send]')";
  $result = mysqli_query($db,$sql);
   $value = mysqli_fetch_assoc($result);
   
   $currentOrder = $value['order_id'];
   //echo $value['order_id'];
   //$sql = "DELETE FROM orderlist WHERE order_id = '$currentOrder'";
   $sql = "UPDATE orderlist SET status = '4' WHERE order_id = '$currentOrder'";
   //$sql = "UPDATE delivererlogin SET hasOrder = '1', order_id = '$currentOrder' WHERE username = '$nameofuser'";
	$result = mysqli_query($db,$sql);
	
	
	$sql = "UPDATE delivererlogin SET hasOrder = '0', order_id = '0' WHERE access_id = '$nameofuser'";
	$result = mysqli_query($db,$sql);
	
	$_SESSION['orderIDnumber'] = NULL;
	$_SESSION['orderListItems'] = NULL;
	
	header("Location: assignOrderCompleted.php");
	
?>