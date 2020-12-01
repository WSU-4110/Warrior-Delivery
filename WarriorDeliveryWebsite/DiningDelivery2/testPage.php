<?php
  
   $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	session_start();
  
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      //$sql = "INSERT INTO `testvalues`(`user_id`, `user_name`, `user_password`) VALUES (NULL,'$myusername','$mypassword')";
      $sql = "SELECT user_id, Authenticated FROM testvalues WHERE access_id = '$myusername' AND user_password = '$mypassword'";
	  
	  $result = mysqli_query($db,$sql);
      $row = mysqli_num_rows($result);
	  $value = mysqli_fetch_assoc($result);
   
	 
		if ($row == 1 && $value['Authenticated']==1){
			//echo "Account Found!";
			$_SESSION['login_user'] = $myusername;
			//$foodItems = $_POST['items'];
			//$sql = "INSERT INTO 'orderlist'('order_id', 'user_name', 'order_item') VALUES (NULL,NULL,'$foodItems')";
			//$sql = "INSERT INTO `orderlist`(`order_id`, `user_name`, `order_item`) VALUES (NULL,'$myusername', '$foodItems')";
			$result = mysqli_query($db,$sql);
         
         header("location: ProfilePage.php");
			
		}
		
		if ($row==0){
			
			header("location: StudentIncorrectLogin.php");
		}
		
		if($row == 1 && $value['Authenticated']==0){
		header("location: StudentUnauthenticated.php");
		
		}
   
   
	 
	
  
 
   
   
   
   
   
   
?>