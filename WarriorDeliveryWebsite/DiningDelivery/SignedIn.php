<?php

session_start();

$user_value = $_SESSION['login_user'];

echo "Welcome " . $user_value . "!";



?>
<!DOCTYPE html>
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  </head>
<body>
<br>
  <br>
<button onclick="cartCreator('pizza')">Add Pizza</button><br>
<button onclick="cartCreator('salad')">Add Salad</button><br>
<button onclick="cartCreator('pepsi')">Add Pepsi</button><br>
<button onclick="cartCreator('fries')">Add Fries</button><br>
<br>


<p id="showCart"></p>
<br>
<p id="showPrice"></p>
<p id="showTax"></p>
<p id="showDeliveryCost"></p>
<p id="showFinal"></p>

<button onclick="sendData()">Checkout</button><br>
<br>
<br>
<br>
<h2><a href = "logout.php">Sign Out</a></h2>
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

var itemPrices = [ ['pizza', 2.00], ['pepsi', 1.00], ['fries', 1.00], ['salad', 3.00] ];
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
finalList = finalList + itemNames[i] + "(x" + itemCounter[i] + ")  ,  ";


}

document.getElementById("showCart").innerHTML = "Current Cart: " + finalList;
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
	document.getElementById("showFinal").innerHTML = "Total Cost: $" + (finalCost + taxCost + 3.00).toFixed(2);
	
	
}
</script>
<script>
function sendData(){
console.log(cart);

$.ajax({

	url: "ajaxTest.php",
	method: "post",
	data: {test1: finalList},
	success: function(res){
	console.log(res);
	}
})
}
</script>
</body>
</html>
   
