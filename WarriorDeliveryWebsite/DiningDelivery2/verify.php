<?php

session_start();

	$myusername = $_POST['accounts'];
    
	$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
   
   $sql = "UPDATE delivererlogin SET Authentication = '1' WHERE access_id='$myusername'";

$result = mysqli_query($db,$sql);
   
   
?>


<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="themeS.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Authentication</title>
</head>
<body>
<a href="ProfilePageKitchen.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Authentication | WSU Dining Delivery</h1><br>

<br>
    <nav>
    <a class="btn" href='ProfilePageKitchen.php'>Home</a>
    </nav>

  



<br>


<h2> Account is now authenticated </h2>



<br>
<br>
    <nav>
        <a class="btn" href='ProfilePageKitchen.php'>Go Back</a><br>
    </nav>




</body>
</html>