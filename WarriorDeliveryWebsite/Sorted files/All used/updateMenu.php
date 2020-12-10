<?php


session_start();
	$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
	$nameofuser = $_SESSION['login_user'];
   $sql = "INSERT INTO `menu`(`item_id`, `item_name`, `price`, `description`, `calories`) VALUES (NULL,'$_POST[test1]', '$_POST[test2]', '$_POST[test3]', '$_POST[test4]')";
  $result = mysqli_query($db,$sql);
   
  
   
  
   
?>