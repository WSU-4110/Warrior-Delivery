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
	<title>Warrior Delivery</title>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Warrior Delivery</h1><br>

<br>
<a href='ProfilePage.php'>Home</a>
  



<br>

<?php

echo "<h1>Welcome " . $user_value . "!</h1>";
?>
<h2> Previous Orders </h2>



<?php

$db = new mysqli('localhost','root','','diningdelivery');

 $sql = "SELECT order_id, order_item, status, location, style, comment, date, phone FROM orderlist WHERE user_name = '$user_value' AND status = '4'";
  $result = mysqli_query($db,$sql);
  while($value = mysqli_fetch_array($result)){
  
  $currentBalance = $value['order_id'];
if ($value != NULL){
echo "<h4>Current Order: " . "Order ID: " . $value['order_id'] . "<br>" . 
							 "Order Item(s) " . $value['order_item'] . "<br>"
							. "Location: " . $value['location'] . "<br>"
							. "Style: " . $value['style'] . "<br>"
							. "Comment: " . $value['comment'] . "<br>"
							. "Phone Number: " . $value['phone'] . "<br>"
							. "Date: " . $value['date'] . "<br></h4>"
							;
}else{
echo "<h3>You have never submitted an order previously</h3>";
}
  }
?>

<a href='ProfilePage.php'>Go Back</a><br>
<a href = "LogOut.php">Sign Out</a>

</body>
</html>