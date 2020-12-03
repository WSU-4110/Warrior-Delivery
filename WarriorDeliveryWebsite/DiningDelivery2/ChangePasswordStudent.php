<?php

$myemail = $_POST['email'];
$oldPassword = $_POST['old'];
$newPassword = $_POST['new'];



$db = new mysqli('localhost','root','','diningdelivery');
$sql = "SELECT access_id WHERE user_password = '$oldPassword'";
 $result = mysqli_query($db,$sql);

$row = mysqli_num_rows($result);


if($row==1){
	$sql = "UPDATE testvalues SET user_password = '$newPassword' WHERE email = '$myemail'";	
	$result = mysqli_query($db,$sql);
	
}

?>

<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Change Password</title>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Change Password | WSU Dining Delivery</h1><br>

<br>
<a href='ProfilePage.php'>Home</a>
  



<br>


<h2> Your password has been changed. You can now sign in using your new password.</h2>



<br>
<br>
<a href='ProfilePage.php'>Go Back</a><br>



</body>
</html>