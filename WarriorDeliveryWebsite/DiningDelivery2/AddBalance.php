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
    <link rel="stylesheet" href="themeS.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Add Balance</title>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Add Balance | WSU Dining Delivery</h1><br>

<br>
    <nav>
        <a class="btn" href='ProfilePage.php'>Home</a>
    </nav>

  



<br>


<h2> Update Balance </h2>


<form action="AddBalanceQuery.php" method="post" autocomplete="on">

<label> Enter Balance to Add (In Dollars)</label><br>
<input type="text" id="amount" name="amount" placeholder="Enter Amount"><br>
<input type="submit" onclick="return confirm('Confirm adding to balance?')" value="Submit"><br><br>
</form>


<br>
<br>
    <nav>
        <a class="btn" href='ProfilePage.php'>Go Back</a><br>
        <a class="btn" href = "LogOut.php">Sign Out</a>

    </nav>



</body>
</html>