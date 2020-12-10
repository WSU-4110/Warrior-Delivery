<?php

$myemail = $_POST['email'];
$newPassword = md5(rand(0,1000));

$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
$sql = "UPDATE delivererlogin SET password = '$newPassword' WHERE email = '$myemail'";	 
	 $result = mysqli_query($db,$sql);
	 
	 
	 $subject = 'WSU Dining Delivery Password Reset';
	 $message = 'You have requested a password reset for your account 
	 
	 Please use this new password to sign into your account. Once signed in, we highly reccomend you
	 to change your password using the change password link.
	 
	 Password: ' . $newPassword . '
	 
	 If you did not request a new password, please check your account details or contact WSU Dining Delivery.
	 
	 
	 -WSU Dining Delivery
	 ';

$headers = 'From:wsudiningdelivery@gmail.com' . "\r\n";

mail($myemail, $subject, $message, $headers);

?>

<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif">
	<title>Reset Password</title>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Reset Password | WSU Dining Delivery</h1><br>

<br>
<a href='ProfilePage.php'>Home</a>

<br>

<h2> Your password has been reset. An email has been set the to the registered email containing the new password.</h2>

<br>
<br>
<a href='ProfilePageDeliverer.php'>Go Back</a><br>
<!-- <a href = "LogOut.php">Sign Out</a> -->

</body>
</html>