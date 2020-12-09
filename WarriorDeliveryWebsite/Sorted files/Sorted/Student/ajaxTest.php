<?php


session_start();
	$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
	$nameofuser = $_SESSION['login_user'];
   $sql = "INSERT INTO `orderlist`(`order_id`, `access_id`, `order_item`, `status`, `location`, `style`, `phone`, `comment`) VALUES (NULL,'$nameofuser', '$_POST[test1]', '3', '$_POST[test3]','$_POST[test4]', '$_POST[test5]', '$_POST[test6]')";
  $result = mysqli_query($db,$sql);
   
    $sql = "UPDATE testvalues SET balance = '$_POST[test2]' WHERE access_id='$nameofuser'";
  $result = mysqli_query($db,$sql);
   
  $sql = "SELECT email, firstname FROM testvalues WHERE access_id = '$nameofuser'";
  $result = mysqli_query($db,$sql);
 $row = mysqli_fetch_assoc($result);
  
  
 $myemail = $row['email'];
 $name = $row['firstname'];
 
 $sql = "SELECT order_id FROM orderlist WHERE access_id = '$nameofuser' ORDER BY order_id DESC";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_assoc($result);

$idValue = $row['order_id'];


 $subject = 'WSU Dining Delivery Order Confirmation of Order ID: ' . $idValue;
 $message = 'Hi ' . $name . '; 
 
 We have received your order of: 
     ' . 
 $_POST['test1'] .
 '
 
 The order will soon be delivered to you by a WSU Deliverer within approximately 30 minutes. 
 To check for updates, please log in to your student account on the WSU Dining Delivery website.
 
 Thank you for ordering with WSU Dining Delivery!
 WSU Dining Delivery';
 
  $headers = 'From:wsudiningdelivery@gmail.com' . "\r\n";
  
   mail($myemail, $subject, $message, $headers);
?>