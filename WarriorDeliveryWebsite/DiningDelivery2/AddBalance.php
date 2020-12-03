<?php

session_start();

   $user_value = $_SESSION['login_user'];
   if($user_value == NULL){
	header("Location: StudentLogin.html");
	exit();
	
}
?>

<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Add Balance</title>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Add Balance | WSU Dining Delivery</h1><br>

<br>
<a href='ProfilePage.php'>Home</a>
  



<br>


<h2> Update Balance </h2>


<form action="AddBalanceQuery.php" method="post" autocomplete="on">

<label> Enter Balance to Add (In Dollars)</label><br>
<input type="text" id="amount" name="amount" placeholder="Enter Amount"><br>
<input type="submit" onclick="return confirm('Confirm adding to balance?')" value="Submit"><br><br>
</form>


<br>
<br>
<a href='ProfilePage.php'>Go Back</a><br>
<a href = "LogOut.php">Sign Out</a>



</body>
</html>