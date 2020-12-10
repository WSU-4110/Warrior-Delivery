<?php

$myemail = $_POST['email'];
$oldPassword = $_POST['old'];
$newPassword = $_POST['new'];



$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
$sql = "SELECT access_id FROM delivererlogin WHERE password = '$oldPassword' AND email = '$myemail'";
 $result = mysqli_query($db,$sql);

$row = mysqli_num_rows($result);


?>

<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif">
	<title>Change Password</title>
</head>
<body>
<a href="ProfilePageDeliverer.php" style="background:none;border:none;display:inline;margin:0px;">
	<img src="shield_only_color.png" alt="Logo" style="max-width:10%;"></a>
	<h1 class="title">Change Password</h1><br>
	
	<nav>
		<a href='ProfilePageDeliverer.php'>Home</a>
		<a style="float:right" href="LogOut.php">Sign Out</a>
		<a style="float:right" href="YourInfoD.php">Your info</a>
		<a class="on" style="float:right" href="ChangePasswordDeliverer.html">Change Password</a>
	</nav>

<br>

<?php

if($row==1){
	$sql = "UPDATE delivererlogin SET password = '$newPassword' WHERE email = '$myemail'";	
	$result = mysqli_query($db,$sql);
	echo "<h2>Your password has been changed. You can now sign in using your new password.</h2>";
	
}else{
    
    echo "<h2> Incorrect Credentials</h2>";
    
}

?>

<br>

</body>
</html>