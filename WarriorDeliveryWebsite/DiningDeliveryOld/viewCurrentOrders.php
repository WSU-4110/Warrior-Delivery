
<h2> Current Order </h2>



<?php
session_start();

$one = $_SESSION['orderIDnumber'];
$two = $_SESSION['orderListItems'];
echo nl2br ("Your Current Order: " . "\n");
echo nl2br ("Order ID: " . $one . "\n");
echo nl2br ("Order Item(s): " . $two . "\n");





   
?>