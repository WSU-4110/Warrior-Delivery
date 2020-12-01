<?php

session_start();

$user_value = $_SESSION['login_user'];

if($user_value == NULL){
    
    ?>
    
    <script>
	window.location.replace("StudentLogin.html");
	</script>
	<?php
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

$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');

$sql = "SELECT user_id, email, access_id, firstname, lastname, user_name, Authenticated FROM testvalues WHERE access_id = '$user_value'";
$result = mysqli_query($db,$sql);
$value = mysqli_fetch_assoc($result);

?>

<table style="width:40%">
	<thead>	
		<th>Details</th>
		<th>Information</th>
		
	</thead>
	
	<tbody>
		<tr>
	
	<td> User ID: </td>
	<td> <?php echo $value['user_id']; ?> </td>
	</tr>
	<tr>
	    <td> Email: </td>
	    <td> <?php echo $value['email']; ?> </td>
	    </tr>
	<tr>
	    <td>First Name: </td>
	    <td> <?php echo $value['firstname']; ?> </td>
	</tr>
	<tr>
	    <td>Last Name: </td>
	    <td> <?php echo $value['lastname']; ?></td>
	</tr>

	</tbody>
	
</table>









<br>
<a href = "ProfilePage.php">Go Back</a><br>
<a href = "LogOut.php">Sign Out</a>


</body>
</html>