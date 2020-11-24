<?php


session_start();
	$db = new mysqli('localhost','root','','diningdelivery');
	
	$nameofuser = $_SESSION['login_user'];
   $sql = "INSERT INTO `orderlist`(`order_id`, `user_name`, `order_item`, `status`, `location`, `style`, `phone`, `comment`) VALUES (NULL,'$nameofuser', '$_POST[test1]', '3', '$_POST[test3]','$_POST[test4]', '$_POST[test5]', '$_POST[test6]')";
  $result = mysqli_query($db,$sql);
   
    $sql = "UPDATE testvalues SET balance = '$_POST[test2]' WHERE user_name='$nameofuser'";
  $result = mysqli_query($db,$sql);
   
  
   
?>