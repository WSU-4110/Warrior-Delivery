<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif"></link>
    <title>Create Student Account | Warrior Delivery</title>
	
	<?php
		// Sample code to be edited later when MySQL connection is established
		$servername = "localhost";
		$username = "username";
		$password = "password";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password);

		// Check connection
		if (!$conn) {
		  die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully";
		
		// function that passes user inputs into database
		function sendToDB() {
			$sql = "INSERT INTO warrior_delivery_users (id, firstname, lastname, username, password)
				VALUES (studentID, firstN, lastN, username, password);"
		}
		
	?>
	
	<script type="text/javascript">

		function validatePassword() {
			<!-- grabs the data from the password and confirmPassword ID and stores them in variables -->
			var password = document.getElementById("password")
            if (password.value.match(/[a-z]/g) && password.value.match(/[A-Z]/g) && password.value.match(/[0-9]/g) && password.value.match(/[^a-zA-Z\d]/g) && password.value.length >= 8) {
                password.setCustomValidity('');
				checkMatching();
			}
            else {
                password.setCustomValidity("Password doesn't meet minimum requirements");
				password.onchange = validatePassword;
			}				
			
		}
		
		function checkMatching() {
			var confirm_password = document.getElementById("confirmPassword");
			<!-- checks if the text value in the two variables are equal -->
			if (password.value != confirm_password.value) {
				confirm_password.setCustomValidity("Passwords don't match");
			} 
			else {
				confirm_password.setCustomValidity('');
				getAttributes();
			}	
			confirm_password.onkeyup = checkMatching;
		}		
		
		// Declare these five variables
		var firstName;
		var lastName;
		var username;
		var studentId;
		var password;
		
		function getAttributes() {
			getFirstName();
			getLastName();
			getUsername();
			getStudentID();
			getPassword();
			
			// Calls the PHP function
			<?php sendToDB(); ?>
			
		}
		
		function getFirstName() {
			firstName = getElementById("name").value;
		}
		function getLastName() {
			lastName = getElementById("Lname").value;
		}
		function getUsername() {
			username = getElementById("uname").value;
		}
		function getStudentID() {
			studentId = getElementById("SID").value;
		}
		function getPassword() {
			password = getElementById("password").value;
		}
	
	
	</script>
</head>
<body>
	
<a href="homepage.html" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Student Account Creation</h1><br>
<a href='Homepage.html'>Home</a>
<a href='menu.html'>Menu</a>  
<a href='StudentLogin.html'>Student Login</a>
<a href='ordering.html'>Order</a>
<a href='DelivererLogin.html'>Delivery</a>
<a href='SelectCreation.html'>Make an Account</a>
<p> </p>

<form action="AccountD.php" autocomplete="on">
    <fieldset>
        <legend>Please fill out the following information</legend>

        <label for="name">First Name</label><br>
        <input type="text" id="name" name="name" placeholder="First Name" required autofocus autocomplete><br>

        <label for="Lname">Last Name</label><br>
        <input type="text" id="Lname" name="Lname" placeholder="Last Name" required autofocus autocomplete><br>

        <label for="SID">Student ID</label><br>
        <input type="text" id="SID" name="SID" placeholder="Student ID" required autofocus autocomplete><br>

        <label for="uname">Username</label><br>
        <input type="text" id="uname" name="uname" placeholder="Username" required autofocus autocomplete><br>

        <label for="password">Password (must contain 8 characters, one uppercase letter, one number, and one special character)</label><br>
        <input type="password" id="password" name="password" placeholder="Password" required><br>

        <label for="confirmPassword">Re-enter Password</label><br>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Re-enter Password" required><br>

		<!--onclick forces the page to run the validatePassword when button pressed-->
        <input type="submit" value="Register" formaction="AccountD.php" onclick="validatePassword()"><br><br>
        <label>
            
        </label>
        <span class="psw"><a style="padding:2px;font-size:1em" href="Homepage.html">Forgot password?</a></span>


    </fieldset>
</form>

<a style="padding:2px;font-size:1em" href='Login.html'>Continue to Student Login</a>

</body>
</html>