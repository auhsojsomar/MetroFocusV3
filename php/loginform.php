<?php 
if(isset($_POST['btnLogin'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$con = mysqli_connect("localhost","root","","metrofocus");
	$query = mysqli_query($con,"Select status from loginform where username = '$username'and password = '$password'");
	$row = mysqli_fetch_assoc($query);

	if($row['status']=="Admin"){
		header("Location: Admin");
	}
	else if($row['status']=="User"){
		header("Location: User");
	}
	else{
		header("Location: Wrong");
	}
	mysqli_close();
}
?>