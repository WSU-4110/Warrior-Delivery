<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="themeS.css">
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



   $user_value = $_SESSION['login_user'];




$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');

$addBalance = $_POST['amount'];
$sql = "SELECT balance FROM testvalues WHERE access_id = '$user_value'";
$result = mysqli_query($db,$sql);
  $value = mysqli_fetch_assoc($result);
  
  $currentBalance = $value['balance'];
  
  $currentBalance = $currentBalance + $addBalance;
  
  $sql = "UPDATE testvalues SET balance = '$currentBalance' WHERE access_id = '$user_value'";
  $result = mysqli_query($db,$sql);
  
 
  echo nl2br ("<h3>$" . number_format($addBalance,2) . " added to balance!" . "\n" . "Your balance is now: $" . number_format($currentBalance, 2) . "</h3>");

?>
   
<br>   
    <nav>
        <a class="btn" href='ProfilePage.php'>Home</a>
    </nav>


</body>
</html>