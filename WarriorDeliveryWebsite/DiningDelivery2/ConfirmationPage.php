<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="themeS.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
    <title>WSU Dining Delivery</title>
</head>
<body>

<a href="homepage.html" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">WSU Dining Delivery</h1><br>



<?php

$message = $_SESSION["reason"];

echo "<h3>$message</h3>";
   
?>
<nav>
    <a class="btn" href='ProfilePage.php'>Home</a>
    </nav>
