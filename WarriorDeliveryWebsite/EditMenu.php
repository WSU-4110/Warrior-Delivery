<?php

session_start();

$user_value = $_SESSION['login_user'];

if($user_value == NULL){
    
    ?>
    
    <script>
	window.location.replace("index.html");
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
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif">
	<title>Warrior Delivery</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<a href="ProfilePageKitchen.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Edit Menu | Warrior Delivery</h1><br>

<br>
<nav>
<a class="btn" href='ProfilePageKitchen.php'>Home</a>    
</nav>


<script>
var textItem = "";
var textPrice = 0;
var textDescription = "";
var textCalories = 0;


function addItem(){
	
	textItem = document.getElementById('itemName').value;
	console.log(textItem);
	
	
}

function addPrice(){
	
	textPrice = document.getElementById('itemPrice').value;
	//textPrice = parseFloat(textPrice);
	console.log(textPrice);
	
	
}

function addDescription(){
	
	textDescription = document.getElementById('itemDescription').value;
	//textPrice = parseFloat(textPrice);
	console.log(textDescription);
	
	
}

function addCalories(){
	
	textCalories = document.getElementById('itemCalories').value;
	//textPrice = parseFloat(textPrice);
	console.log(textCalories);
	
	
}

function sendData(){


textItem = textItem.toString();
textPrice = textPrice.toString();
textDescription = textDescription.toString();
textCalories = textCalories.toString();

$.ajax({

	url: "updateMenu.php",
	method: "post",
	data: {test1: textItem, test2: textPrice, test3: textDescription, test4: textCalories},
	success: function(res){
	console.log(res);
	}
})

window.location.replace("menuAddConfirmation.php");


}


</script>
 


<br>
<h2> Current Active Menu </h2>
<table style>
	<thead>	
		<th>Item ID</th>
		<th>Item Name</th>
		<th>Description</th>
		<th>Price($)</th>
		<th>Calories</th>
	</thead>
<?php
$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
$sql = "SELECT item_id, item_name, price, description, calories FROM menu";


$result = mysqli_query($db,$sql);

while($row = mysqli_fetch_array($result)){
	   
	   
	   ?>
	
	
	<tbody>
		<tr>
	
	<td> <?php echo $row['item_id']; ?> </td>
	<td> <?php echo $row['item_name']; ?> </td>
	<td> <?php echo $row['description']; ?> </td>
	<td> <?php echo $row['price']; ?>.00 </td>
	<td> <?php echo $row['calories']; ?> </td>
	</tr>
	
	
	    
	    <?php
}




?>
	   
</tbody>
</table>

<br>

<fieldset style=text-align:center>
	<legend>Add a new menu item:</legend>

	<label for="newMenuItem">Item Name</label><br>
	<input type="text" id="itemName" style="width:500px" placeholder="Please enter item name" onchange="addItem()" required></input><br>
		
	<label for="newMenuPrice">Item Price</label><br>
	<input type="number" id="itemPrice" style="width:500px" placeholder="Please enter item price" onchange="addPrice()" required></input><br>

	<label for="newMenuDescription">Item Description</label><br>
	<textarea id="itemDescription" style="width:500px" required rows="1" cols="30" size=50 placeholder="Please enter item description" onchange="addDescription()" required></textarea><br>

	<label for="newMenuCalories">Item Calorie Count</label><br>
	<input type="number" id="itemCalories" style="width:500px" placeholder="Please enter the item's calorie content" onchange="addCalories()" required></input><br>

<br>
	<button onclick="return confirm('Are you sure you want to submit the item?') && sendData()">Submit</button><br>

</fieldset>

<br>
<h2> Delete item from menu </h2>


<form action = "deleteOrder.php" style=text-align:center method="post">
<select id="deleteOrder" name="deleteOrder">
	<option> Select Item ID </option>
	
<?php
$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
$sql = "SELECT item_id FROM menu";
$result = mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($result)){

?>
			<option value="<?php echo ($row['item_id']); ?>"><?php echo ($row['item_id']); ?></option>
<?php
		}
?>


	
</select>
<input type="submit" onclick="return confirm('Are you sure you want to delete the item?')" value="Submit">
</form>


<nav>
<a class="btn" href = "ProfilePageKitchen.php">Go Back</a><br>
<a class="btn" href = "LogOut.php">Sign Out</a>
</nav>


</body>
</html>