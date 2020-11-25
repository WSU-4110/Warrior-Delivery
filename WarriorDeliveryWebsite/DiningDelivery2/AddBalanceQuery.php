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
  
 
  echo nl2br ("$" . number_format($addBalance,2) . " added to balance!" . "\n" . "Your balance is now $" . number_format($currentBalance, 2));

?>
   
