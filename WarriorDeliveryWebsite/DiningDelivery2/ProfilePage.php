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

 
 
 

$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
 $sql = "SELECT firstname FROM testvalues WHERE access_id = '$user_value'";
  $result = mysqli_query($db,$sql);
 $value = mysqli_fetch_array($result);
 
 $user = $value['firstname'];

?>

<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Profile Page Student</title>
</head>
<body>
<a href="homepage.html" style="background:none;border:none;display:inline;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="max-width:10%;"></a>
<h1 class="title">Your Student Account</h1><br>

<nav>
	<a style="float:left" class="on" href='ProfilePage.php'>Home</a>
	<a style="float:left" href='menu.html'>Menu</a>
	<a href='ordering.php'>Order</a> <!--The last link on the left should not have float:left-->
	<a style="float:right" href='LogOut.php'>Log Out</a>
</nav>

<br>
<?php

echo "<h1>Welcome " . $user . "!</h1>";

?>
<br>

<a href='StudentOrderStatus.php'>Check Order Status</a><br>
<a href='CheckBalance.php'>Check Balance</a><br>
<a href ='AddBalance.php'>Add Balance</a><br>
<a href='ViewOrderHistory.php'>View Order History</a><br>
<a href = 'YourInfoS.php'>Your Information</a><br>

</body>
</html>