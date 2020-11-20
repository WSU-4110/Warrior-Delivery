<?php

session_start();

	$myusername = $_POST['accounts'];
    
	$db = new mysqli('localhost','root','','diningdelivery');
   
   $sql = "UPDATE delivererlogin SET Authentication = '1' WHERE username='$myusername'";

$result = mysqli_query($db,$sql);
   
   
?>