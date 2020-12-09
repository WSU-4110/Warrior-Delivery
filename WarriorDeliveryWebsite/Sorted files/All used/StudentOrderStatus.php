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
	<title>WSU Dining Delivery</title>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Order Status | WSU Dining Delivery</h1><br>

<br>
<a href='ProfilePage.php'>Home</a>
  



<br>

<h2> Current Order Status </h2>






<?php


$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');

 $sql = "SELECT order_id, order_item, status, location, style FROM orderlist WHERE access_id = '$user_value' AND (status='3' OR status='1' OR status='0') ORDER BY order_id DESC; ";
  $result = mysqli_query($db,$sql);
  
  
  
  
  
  
  while($value = mysqli_fetch_array($result)){
  
  //$value = mysqli_fetch_assoc($result);
  
  //$currentBalance = $value['order_id'];
  
  
  
  
if ($value != NULL and $value['status'] == '0'){
	
	?>
	<table style="width:40%">
	<thead>	
		<th>Details</th>
		<th>Information</th>
		
	</thead>
	
	<tbody>
		<tr>
	
	<td> Current Order ID: </td>
	<td> <?php echo $value['order_id']; ?> </td>
	</tr>
	<tr>
	    <td> Order Item(s): </td>
	    <td> <?php echo $value['order_item']; ?> </td>
	    </tr>
	<tr>
	    <td>Status: </td>
	    <td> Waiting to be picked up! </td>
	</tr>
	<tr>
	    <td>Location: </td>
	    <td> <?php echo $value['location']; ?></td>
	</tr>
	<tr>
	<td> Style: </td>
	<td> <?php echo $value['style']; ?> </td>
	</tr>
	</tbody>
	
</table>
	    
	    <?php
}




if ($value != NULL and $value['status'] == '1'){
	
	?>
	<table style="width:40%">
	<thead>	
		<th>Details</th>
		<th>Information</th>
		
	</thead>
	
	<tbody>
		<tr>
	
	<td> Current Order ID: </td>
	<td> <?php echo $value['order_id']; ?> </td>
	</tr>
	<tr>
	    <td> Order Item(s): </td>
	    <td> <?php echo $value['order_item']; ?> </td>
	    </tr>
	<tr>
	    <td>Status: </td>
	    <td> In Delivery </td>
	</tr>
	<tr>
	    <td>Location: </td>
	    <td> <?php echo $value['location']; ?></td>
	</tr>
	<tr>
	<td> Style: </td>
	<td> <?php echo $value['style']; ?> </td>
	</tr>
	</tbody>
	
</table>
	    
	    <?php
}

if ($value != NULL and $value['status'] == '3'){
	
	?>
	<table style="width:40%">
	<thead>	
		<th>Details</th>
		<th>Information</th>
		
	</thead>
	
	<tbody>
		<tr>
	
	<td> Current Order ID: </td>
	<td> <?php echo $value['order_id']; ?> </td>
	</tr>
	<tr>
	    <td> Order Item(s): </td>
	    <td> <?php echo $value['order_item']; ?> </td>
	    </tr>
	<tr>
	    <td>Status: </td>
	    <td> Waiting to be made by kitchen! </td>
	</tr>
	<tr>
	    <td>Location: </td>
	    <td> <?php echo $value['location']; ?></td>
	</tr>
	<tr>
	<td> Style: </td>
	<td> <?php echo $value['style']; ?> </td>
	</tr>
	</tbody>
	
</table>
	    
	    <?php
}





}
?>
	    
	     




<br>
<br>
<a href='ProfilePage.php'>Go Back</a><br>
<a href = "LogOut.php">Sign Out</a>



</body>
</html>