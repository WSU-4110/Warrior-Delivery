<?php

$myemail = $_POST['email'];
$oldPassword = $_POST['old'];
$newPassword = $_POST['new'];



$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
$sql = "SELECT access_id FROM testvalues WHERE user_password = '$oldPassword' AND email = '$myemail'";
 $result = mysqli_query($db,$sql);

$row = mysqli_num_rows($result);


?>

<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="themeS.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Change Password</title>
</head>
<body>
<a href="index.html" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Change Password</h1><br>

<br>


  
<br>

<?php

if($row==1){
	$sql = "UPDATE testvalues SET user_password = '$newPassword' WHERE email = '$myemail'";	
	$result = mysqli_query($db,$sql);
	echo "<h2>Your password has been changed. You can now sign in using your new password.</h2>";
}else{
    
    echo "<h2>Incorrect Credentials.</h2>";
    
}

?>

<br>
<br>

<nav>
        <a class="btn" href = "ProfilePage.php">Go Back</a><br>
       

    </nav>

</body>
</html>