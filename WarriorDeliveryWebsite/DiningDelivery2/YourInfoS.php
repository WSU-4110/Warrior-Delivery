


<?php
session_start();


$user_value = $_SESSION['login_user'];

if($user_value == NULL){
	header("Location: StudentLogin.html");
	exit();
	
}



   
?>



<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Information</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Information | WSU Dining Delivery</h1><br>

<br>
<a href='ProfilePage.php'>Home</a>
  



<br>


<h2> Your Information </h2>


<?php

$db = new mysqli('localhost','root','','diningdelivery');

$sql = "SELECT user_id, email, access_id, firstname, lastname, user_name, Authenticated FROM testvalues WHERE user_name = '$user_value'";
$result = mysqli_query($db,$sql);
$value = mysqli_fetch_assoc($result);

echo nl2br ("User ID: " . $value['user_id'] . "\n"
	. "Email: " . $value['email'] . "\n"
	. "First Name: " . $value['firstname'] . "\n"
	. "Last Name: " . $value['lastname'] . "\n"
	. "Username: " . $value['user_name'] . "\n"
	. "Authentication: " . $value['Authenticated'] . "\n");
	


?>







<br>
<a href = "ProfilePage.php">Go Back</a><br>
<a href = "LogOut.php">Sign Out</a>


</body>
</html>