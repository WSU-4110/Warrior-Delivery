<?php
  
   $db = new mysqli('localhost','root','','diningdelivery');
	session_start();
  
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      //$sql = "INSERT INTO `testvalues`(`user_id`, `user_name`, `user_password`) VALUES (NULL,'$myusername','$mypassword')";
      $sql = "SELECT user_id FROM testvalues WHERE user_name = '$myusername' and user_password = '$mypassword'";
	  
	  $result = mysqli_query($db,$sql);
      $row = mysqli_num_rows($result);
   
	 
		if ($row == 1){
			echo "Account Found!";
			$_SESSION['login_user'] = $myusername;
			$foodItems = $_POST['items'];
			//$sql = "INSERT INTO 'orderlist'('order_id', 'user_name', 'order_item') VALUES (NULL,NULL,'$foodItems')";
			//$sql = "INSERT INTO `orderlist`(`order_id`, `user_name`, `order_item`) VALUES (NULL,'$myusername', '$foodItems')";
			$result = mysqli_query($db,$sql);
         
         header("location: SignedIn.php");
			
		}else{
			echo "Incorrect Login";
		}
   
   
	 
	
   
   
   
   
   
   
?>