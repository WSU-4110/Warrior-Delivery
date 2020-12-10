<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="themeS.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
    <title>Menu | Warrior Delivery</title>
</head>
<body>
<nav>
    <a class="btn" href="index.html" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Menu</h1><br>
<br>
<a class="btn" href='index.html'>Home</a>
<a class="btn" href='menu.php'>Menu</a>  
<a class="btn" href='StudentLogin.html'>Student Login</a>
<a class="btn" href='DelivererLoginPage.html'>Delivery Login</a>
<a class="btn" href='SelectCreation.html'>Create an Account</a>
    </nav>


<br><br>
<h3 style=text-align:center> &nbsp&nbsp&nbspToday's Available Menu </h3>
<table style>
	<thead>	
		<th>Item</th>
		<th>Price*</th>
		<th>Description</th>
		<th>Calories</th>
	</thead>
	
	<tbody>
		<tr>
		<?php



	$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');

	$sql = "SELECT item_name, description, price, calories FROM menu ORDER BY item_name ASC";
$result = mysqli_query($db,$sql);

 while($row = mysqli_fetch_array($result)){	
?>
			<td><?php echo $row['item_name'];?></td>
			<td>$<?php echo (($row['price']));?>.00</td>
			<td><?php echo (($row['description']));?></td>
			<td><?php echo (($row['calories']));?></td>
		</tr>
		
		
	<?php
 }
 ?>
	</tbody>
</table>






<br>
<p style=text-align:center><b>&nbsp&nbsp&nbsp*Items do not include tax or delivery fee</b></p>

</body>
</html>