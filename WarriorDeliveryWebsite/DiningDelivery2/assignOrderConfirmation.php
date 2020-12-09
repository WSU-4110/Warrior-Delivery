<?php
session_start();


?>

<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="themeS.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Warrior Delivery</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<a href="ProfilePageDeliverer.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Warrior Delivery</h1><br>

<br>
    <nav>
        <a class="btn" href='ProfilePageDeliverer.php'>Home</a><br>
    </nav>


<?php


echo "<h3>Thank you for receiving an order. Please check the details of the order and deliver the order to complete the task.</h3>";


?>
<br>
    <nav>
        <a class="btn" href='ProfilePageDeliverer.php'>Go Back</a><br><br><br>
        <a class="btn" href='LogOut.php'>Sign Out</a>
    </nav>
