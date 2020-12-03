<?php
  
   $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	session_start();
  
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      //$sql = "INSERT INTO `testvalues`(`user_id`, `user_name`, `user_password`) VALUES (NULL,'$myusername','$mypassword')";
      $sql = "SELECT user_id, Authentication FROM delivererlogin WHERE access_id = '$myusername' and password = '$mypassword'";
	  
	  $result = mysqli_query($db,$sql);
      $row = mysqli_num_rows($result);
	  $value = mysqli_fetch_assoc($result);
	 
		if ($row == 1 && $value['Authentication']==1){
			//echo "Account Found!";
			$_SESSION['login_user'] = $myusername;
			//$foodItems = $_POST['items'];
			//$sql = "INSERT INTO 'orderlist'('order_id', 'user_name', 'order_item') VALUES (NULL,NULL,'$foodItems')";
			//$sql = "INSERT INTO `orderlist`(`order_id`, `user_name`, `order_item`) VALUES (NULL,'$myusername', '$foodItems')";
			$result = mysqli_query($db,$sql);
         
         header("location: ProfilePageDeliverer.php");
			
		}
		if($row==1 && $value['Authentication']==0){
			header("location: DelivererUnauthenticated.php");
		}
		
		if($row == 0){
			header("location: StudentIncorrectLogin.php");
			
		}
   
   
	 
	
   
   
   
   
   
   
?>