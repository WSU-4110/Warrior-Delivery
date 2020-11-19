<?php

session_start();

	$myusername = $_POST['accounts'];
    
	$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
   
   $sql = "UPDATE delivererlogin SET Authentication = '1' WHERE username='$myusername'";

$result = mysqli_query($db,$sql);
   
   
?>