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


$user_value = $_SESSION['login_user'];

$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
$sql = "UPDATE testvalues SET balance = '$_POST[test1]' WHERE access_id = '$user_value'";	
 $result = mysqli_query($db,$sql);


?>



<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Insufficient Balance</title>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Insufficient Balance | WSU Dining Delivery</h1><br>

<br>
<a href='ProfilePage.php'>Home</a>
  



<br>


<h2> You do not have enough funds in your balance for the order. Please add to the balance using the add balance page. </h2>



<br>
<br>
<a href='ProfilePage.php'>Go Back</a><br>



</body>
</html>