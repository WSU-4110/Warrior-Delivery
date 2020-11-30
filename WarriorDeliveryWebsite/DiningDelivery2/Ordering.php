<?php

session_start();

$user_value = $_SESSION['login_user'];

if($user_value == NULL){
	header("Location: StudentLogin.html");
	exit();
	
}


$db = new mysqli('localhost','root','','diningdelivery');

 $sql = "SELECT balance FROM testvalues WHERE user_name = '$user_value'";
  $result = mysqli_query($db,$sql);
  
  $value = mysqli_fetch_assoc($result);
  
  $currentBalance = $value['balance'];


?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
    <title>Order | Warrior Delivery</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>

<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Order | WSU Dining Delivery</h1><br>
<a href='ProfilePage.php'>Home</a>


<p><b>To place an order, please fill out the following fields below.</b></p>





    
	<fieldset>
        <legend>Place an Order</legend>


<fieldset>
<legend>Choose food items and quantity:</legend>
       
		
<button onclick="cartCreator('fries')"><img src="C:\xampp\htdocs\DiningDelivery2\WayneLogo2.png">Add Fries</button><br>


<?php

$sql = "SELECT item_name FROM menu";
$result = mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($result)){

?>
		<button onclick="cartCreator('<?php echo ($row['item_name']); ?>')"> Add <?php echo ($row['item_name']); ?></button>

<?php
		}
		$_SESSION["reason"] = "Your Order has been successfully placed! Your order will be delivered as soon as possible!";
?>


</fieldset>

 




<br>



<fieldset>
<legend> Choose delivery location </legend>
	<div id="location">
		<input type="radio" id="Towers" name="location" value="Towers Residential" onclick="getRadioValue()"> Towers Residential<br>
		<input type="radio" id="AWD" name="location" value="Anthony Wayne Drive Apartments" onclick="getRadioValue()"> Anthony Wayne Drive Apartments<br>
		<input type="radio" id="Ghafari" name="location" value="Ghafari Hall" onclick="getRadioValue()"> Ghafari Hall<br>
		<input type="radio" id="Atchison" name="location" value="Atchison Hall" onclick="getRadioValue()"> Atchison Hall<br>
		<input type="radio" id="StudentCenter" name="location" value="Student Center" onclick="getRadioValue()"> Student Center<br>
		<input type="radio" id="UGL" name="location" value="Undergraduate Library" onclick="getRadioValue()"> Undergraduate Library<br>
	</div>
</fieldset>
		
		
	
<script>
var finalLocation;
var finalStyle;
var textField = "";
var textComment = "";


function getRadioValue(){
	var i = 0;
	var selection = document.getElementsByName('location');
	
	
	for (i=0; i<selection.length; i++){
		
		if(selection[i].checked){
			
			document.getElementById("output").innerHTML = "Location: " + selection[i].value;
			console.log(selection[i].value);
			finalLocation = selection[i].value;
		}
		
	}
	
	
	
}


function DeliveryStyle(){
	
	var i = 0;
	var deliverySelection = document.getElementsByName('deliveryStyle');
	
	for (i=0; i<deliverySelection.length; i++){
		
		if(deliverySelection[i].checked){
			
			document.getElementById("deliverySelection").innerHTML = "Delivery Style: " + deliverySelection[i].value;
			console.log(deliverySelection[i].value);
			finalStyle = deliverySelection[i].value;
		}
		
	}
	
	 
	
	
}



function phoneNumber(){
	
	textField = document.getElementById('phoneText').value;
	console.log(textField);
	
	
}

function additionalText(){
	
	textComment = document.getElementById('additionalComment').value;
	console.log(textComment);
	
	
}


</script>



        <fieldset>
            <legend>Select your Delivery Style:</legend>
            <input type="radio" id="hand" name="deliveryStyle" value="In your hand" onclick="DeliveryStyle()">
            <label for="hand">In your Hand</label><br>
            <input type="radio" id="door" name="deliveryStyle" value="On your Doorstep" onclick="DeliveryStyle()">
            <label for="door">On your Doorstep</label><br>
			<input type="radio" id="na" name="deliveryStyle" value="N/A" onclick="DeliveryStyle()">
            <label for="na">N/A</label><br>
        </fieldset>


		<label for="Phone Number">Enter Phone Number</label><br>
        <textarea id="phoneText" rows="1" cols="30" placeholder="Please enter your phone number" onchange="phoneNumber()" required></textarea><br>



        <label for="comment">Comments:</label><br>
        <textarea id="additionalComment" rows="3" cols="65" placeholder="Additional Delivery Comments" onchange="additionalText()"></textarea><br>

        
    
	<h2>Shopping Cart:</h2>
	
	
	
<p id="showCart"></p>

<h2>Location / Delivery Style </h2>
<div id="output"></div>
<br>
<div id="deliverySelection"></div>
<h2> Price </h2>
<p id="showPrice"></p>
<p id="showTax"></p>
<p id="showDeliveryCost"></p>
<p id="showFinal"></p>

<br>
	<button onclick="return confirm('Are you sure you want to submit your order?') && sendData()">Checkout</button><br>
	
	</fieldset>



<br>

<br>
<br>
<br>
<a href='ProfilePage.php'>Go Back</a><br>
<a href = "LogOut.php">Sign Out</a>
<script>
var cart = '';
var counter = 0;
var itemNames = [];
var itemCounter = [];
var i = 0
var check = false;
var finalList = '';
var tempCounter = 0;
var finalCost = 0;

var itemPrices = [ ['pizza', 2.00], ['pepsi', 1.00], ['fries', 1.00], ['salad', 3.00], ['Apple Juice', 1.00] ];
var finalPrice = 0;


function cartCreator(name){
for (i = 0; i<itemNames.length;i++){
	if (itemNames[i] == name){
		check = true;
		itemCounter[i] = itemCounter[i] + 1;
		tempCounter = i;

	}

}

if (check == false){

itemNames.push(name);
itemCounter.push(1);
}




i = 0;
//cart = itemNames.toString();
finalList = '';
for (i=0; i<itemNames.length;i++){
finalList = finalList + itemNames[i] + " (x" + itemCounter[i] + ")  ,  ";


}

document.getElementById("showCart").innerHTML = finalList;
check = false;

priceCalculator(name);

}




function priceCalculator(name){
	i = 0;
	x = 0;
	taxCost = 0;
for (i = 0; i<itemPrices.length; i++){
	
	if (name == itemPrices[i][0]){
		finalCost = finalCost + itemPrices[i][1];
		console.log(name);
	
	}
		
	
	
}
	
	document.getElementById("showPrice").innerHTML = "Item(s) Price: $" + finalCost +".00";
	taxCost = (0.06*finalCost);
	document.getElementById("showTax").innerHTML = "Tax: $" + (0.06*finalCost).toFixed(2);
	document.getElementById("showDeliveryCost").innerHTML = "Delivery Cost: $" + (3.00).toFixed(2);
	finalPrice = (finalCost + taxCost + 3.00);
	document.getElementById("showFinal").innerHTML = "Total Cost: $" + (finalCost + taxCost + 3.00).toFixed(2);
	
	
}
</script>




<script>
function sendData(){
var nowBalance = <?php print $currentBalance; ?>;
nowBalance = nowBalance - finalPrice;

finalLocation = finalLocation.toString();
finalStyle = finalStyle.toString();
textField = textField.toString();
textComment = textComment.toString();


$.ajax({

	url: "ajaxTest.php",
	method: "post",
	data: {test1: finalList, test2: nowBalance, test3: finalLocation, test4: finalStyle, test5: textField, test6: textComment},
	success: function(res){
	console.log(res);
	}
})



window.location.replace('ConfirmationPage.php');
}
</script>


</body>
</html>
