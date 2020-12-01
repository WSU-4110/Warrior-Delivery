<?php

session_start();

$user_value = $_SESSION['login_user'];

if($user_value == NULL){
    
    ?>
    
    <script>
	window.location.replace("StudentLogin.html");
	</script>
	<?php
	exit();
	
}

?>

<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Check Balance</title>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Check Balance | WSU Dining Delivery</h1><br>

<br>
<a href='ProfilePage.php'>Home</a>
  



<br>


<h2> Current Balance </h2>
<?php

$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');

 $sql = "SELECT balance FROM testvalues WHERE access_id = '$user_value'";
  $result = mysqli_query($db,$sql);
  
  $value = mysqli_fetch_assoc($result);
  
  $currentBalance = $value['balance'];
	
echo "<h3>Your Current Balance: $" . (number_format($currentBalance,2)) . "</h3>";

?>
<br>
<br>
<a href='ProfilePage.php'>Go Back</a><br>
<a href = "LogOut.php">Sign Out</a>



</body>
</html>