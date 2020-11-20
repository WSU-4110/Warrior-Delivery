<?php

session_start();

   $user_value = $_SESSION['login_user'];
   
?>

<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Warrior Delivery</title>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Warrior Delivery</h1><br>

<br>
<a href='ProfilePage.php'>Home</a>
  



<br>

<?php

echo "<h1>Welcome " . $user_value . "!</h1>";
?>
<h2> Current Balance </h2>
<?php

$db = new mysqli('localhost','root','','diningdelivery');

 $sql = "SELECT balance FROM testvalues WHERE user_name = '$user_value'";
  $result = mysqli_query($db,$sql);
  
  $value = mysqli_fetch_assoc($result);
  
  $currentBalance = $value['balance'];
	
echo "<h3>Current Balance: $" . (number_format($currentBalance,2)) . "</h3>";

?>
<br>
<br>
<a href='ProfilePage.php'>Go Back</a><br>
<a href = "LogOut.php">Sign Out</a>



</body>
</html>