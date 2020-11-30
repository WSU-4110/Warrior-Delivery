<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" >
    <title>WSU Dining Delivery</title>
</head>
<body>

<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">WSU Dining Delivery</h1><br>
<br>





<?php

session_start();

   $user_value = $_SESSION['login_user'];




$db = new mysqli('localhost','root','','diningdelivery');

$addBalance = $_POST['amount'];
$sql = "SELECT balance FROM testvalues WHERE user_name = '$user_value'";
$result = mysqli_query($db,$sql);
  $value = mysqli_fetch_assoc($result);
  
  $currentBalance = $value['balance'];
  
  $currentBalance = $currentBalance + $addBalance;
  
  $sql = "UPDATE testvalues SET balance = '$currentBalance' WHERE user_name = '$user_value'";
  $result = mysqli_query($db,$sql);
  
 
  echo nl2br ("<h3>$" . number_format($addBalance,2) . " added to balance!" . "\n" . "Your balance is now: $" . number_format($currentBalance, 2) . "</h3>");

?>
   
<br>   
<a href='ProfilePage.php'>Home</a>

</body>
</html>