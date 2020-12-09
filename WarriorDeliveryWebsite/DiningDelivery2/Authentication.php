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
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
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
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Warrior Delivery</h1><br>

<br>
    <nav>
        <a class="btn" href='ProfilePageKitchen.php'>Home</a>
    </nav>

 

<h2> Current Authenticated Registered Accounts </h2>
<table style>
	<thead>	
		<th>User ID</th>
		<th>Access ID</th>
		<th>Username</th>
		<th>Authentication</th>
		
	</thead>
<?php
   $db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
   
   $sql = "SELECT user_id, username, hasOrder, access_id, order_id, Authentication FROM delivererlogin WHERE Authentication = '1'";
   
   $result = mysqli_query($db,$sql);
   
   while($row = mysqli_fetch_array($result)){
       
       ?>
	
	
	<tbody>
		<tr>
	
	<td> <?php echo $row['user_id']; ?> </td>
	<td> <?php echo $row['access_id']; ?> </td>
	<td> <?php echo $row['username']; ?> </td>
	<td> <?php echo $row['Authentication']; ?> </td>
	</tr>
	
	
	    
	    <?php
}




?>
       
       
</tbody>
</table>

<h2> Current UnAuthenticated Accounts </h2>
<table style>
	<thead>	
		<th>User ID</th>
		<th>Access ID</th>
		<th>Username</th>
		<th>Authentication</th>
		
	</thead>
<?php
$sql = "SELECT user_id, username, hasOrder, access_id, order_id, Authentication FROM delivererlogin WHERE Authentication = '0'";


$result = mysqli_query($db,$sql);

while($row = mysqli_fetch_array($result)){
	   

 ?>
	
	
	<tbody>
		<tr>
	
	<td> <?php echo $row['user_id']; ?> </td>
	<td> <?php echo $row['access_id']; ?> </td>
	<td> <?php echo $row['username']; ?> </td>
	<td> <?php echo $row['Authentication']; ?> </td>

	</tr>



	    
	    <?php
}




?>
</tbody>	
	</table>


<h2> Verify Delivery Account Here </h2>
<form action = "verify.php" method="post">
<select id="accounts" name="accounts">
	<option> Select Account </option>
	
<?php
$sql = "SELECT user_id, username, access_id, hasOrder, order_id, Authentication FROM delivererlogin WHERE Authentication = '0'";
$result = mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($result)){

?>
			<option value="<?php echo ($row['access_id']); ?>"><?php echo ($row['access_id']); ?></option>
<?php
		}
?>


	
</select>
<input type="submit" onclick="return confirm('Are you sure you want to verify the account?')" value="Submit">
</form>

<br>

    <nav>
        <a class="btn" href = "ProfilePageKitchen.php">Go Back</a><br>
        <a class="btn" href = "LogOut.php">Sign Out</a>

    </nav>


</body>
</html>