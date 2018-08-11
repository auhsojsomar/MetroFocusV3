<?php 
	if(isset($_POST['btnSignup'])) {
		$firstname = $_POST["fname"];
		$lastname = $_POST["lname"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		$cpassword = $_POST["cpassword"];
		$con = mysqli_connect("localhost","root","","metrofocus");
		if($password != $cpassword){
			$password = md5($password);
			$query = mysqli_query($con,"INSERT INTO loginform(username,password,firstname,lastname)VALUES('$username','$password','$firstname','$lastname')");
			header("Location: index.php");
		}
	}
	?>