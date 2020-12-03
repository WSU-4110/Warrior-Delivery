<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
    <title>Menu | Warrior Delivery</title>
</head>
<body>

<a href="index.html" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Menu</h1><br>
<br>
<a href='index.html'>Home</a>
<a href='menu.php'>Menu</a>  
<a href='StudentLogin.html'>Student Login</a>
<a href='DelivererLoginPage.html'>Delivery Login</a>
<a href='SelectCreation.html'>Create an Account</a>

<br><br>
<h3> Today's Available Menu </h3>
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

	$sql = "SELECT item_name, description, price, calories FROM menu";
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







<p>*Items do not include tax or delivery fee</p>
<table>
	<thead>
		<th>Category</th>
		<th>Item</th>
		<th>Description</th>
		<th>Calories</th>
	</thead>
	
	<tbody>
		<tr>
			<td>Grill</td>
			<td>Gardenburger® Black Bean Veggie Burger</td>
			<td>Hearty black bean burger made with brown rice, onions, corn, red bell peppers, chilies and a hint of garlic on a white roll</td>
			<td>270</td>
		</tr>
		<tr>
			<td>Grill</td>
			<td>Crispy Chicken Sandwich</td>
			<td>Crispy breaded chicken, American cheese, lettuce, tomato, pickle slices and mayonnaise</td>
			<td>620</td>
		</tr>
		<tr>
			<td>Grill</td>
			<td>Crispy Shoestring Fries</td>
			<td>Piping hot crispy shoestring French fries</td>
			<td>150</td>
		</tr>
		<tr>
			<td>Grill</td>
			<td>Old-Fashioned Coleslaw</td>
			<td>Green cabbage and carrots tossed in a traditional creamy dressing</td>
			<td>150</td>
		</tr>
		<tr>
			<td>Pizza Station</td>
			<td>Classic Cheese Pizza</td>
			<td>Mozzarella cheese and pizza sauce</td>
			<td>250</td>
		</tr>
		<tr>
			<td>Pizza Station</td>
			<td>Pepperoni Pizza</td>
			<td>Pepperoni, mozzarella and pizza sauce</td>
			<td>280</td>
		</tr>
		<tr>
			<td>Soup</td>
			<td>Chicken Noodle Soup</td>
			<td>Tender chicken, egg noodles and vegetables simmered in savory chicken stock</td>
			<td>90</td>
		</tr>
		<tr>
			<td>Soup</td>
			<td>Tomato Basil Soup</td>
			<td>Fresh pack tomatoes, tomato paste and tomato puree with sautéed garlic & onion, finished with touch of heavy cream and basil</td>
			<td>110</td>
		</tr>
		<tr>
			<td>Dessert</td>
			<td>Chocolate Chip Cookie</td>
			<td>Freshly baked chewy cookie with semisweet chocolate chips</td>
			<td>120</td>
		</tr>
		<tr>
			<td>Dessert</td>
			<td>Peanut Butter Cookie</td>
			<td>Freshly baked peanut butter cookie</td>
			<td>120</td>
		</tr>
</body>
</html>