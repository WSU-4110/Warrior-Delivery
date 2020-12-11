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
	<title>Order History</title>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Order History | WSU Dining Delivery</h1><br>

<br>
    <nav>
    <a class="btn" href='ProfilePage.php'>Home</a>
    </nav>

  



<br>


<h2> Previous Orders </h2>



<?php

$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');

 $sql = "SELECT order_id, order_item, status, location, style, comment, date, phone FROM orderlist WHERE access_id = '$user_value' AND status = '4'";
  $result = mysqli_query($db,$sql);
  while($value = mysqli_fetch_array($result)){
  
  $currentBalance = $value['order_id'];
if ($value != NULL){
    
    ?>
	<table style="width:40%">
	<thead>	
		<th>Details</th>
		<th>Information</th>
		
	</thead>
	
	<tbody>
		<tr>
	
	<td> Order ID: </td>
	<td> <?php echo $value['order_id']; ?> </td>
	</tr>
	<tr>
	    <td> Order Item(s): </td>
	    <td> <?php echo $value['order_item']; ?> </td>
	    </tr>
	<tr>
	    <td>Comment: </td>
	    <td> <?php echo $value['comment']; ?> </td>
	</tr>
	<tr>
	    <td>Location: </td>
	    <td> <?php echo $value['location']; ?></td>
	</tr>
	<tr>
	<td> Style: </td>
	<td> <?php echo $value['style']; ?> </td>
	</tr>
	<tr>
	<td> Date: </td>
	<td> <?php echo $value['date']; ?> </td>
	</tr>
	</tbody>
	
</table>
	    <br>
	    <?php
    
}else{
echo "<h3>You have never submitted an order previously</h3>";
}
  }
?>
<nav>
    <a class="btn" href='ProfilePage.php'>Go Back</a><br>
<a class="btn" href = "LogOut.php">Sign Out</a>
    </nav>


</body>
</html>