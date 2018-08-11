	<!-- bulma core css -->
	<link rel="stylesheet" href="../bulma/css/bulma.min.css">

	<!-- font awesome css + icons -->
	<link rel="stylesheet" href="../fontawesome/css/all.css">
	<link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">

	<link rel="stylesheet" href="../css/signuppage.css">
	<link rel="stylesheet" href="../css/footer.css">
	<title>MetroFocus - Signup</title>
<body>
	<section class="hero is-dark">
		<div class="hero-head">
			<div class="container">
				<nav class="navbar is-dark">
					<div class="navbar-brand">
						<a href="" class="navbar-item">
							<img src="" alt="MEtroFocusLOGO" class="image">
						</a>

						<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
						</a>
					</div>

					<div class="navbar-menu">
						<div class="navbar-start">
							<a href="" class="navbar-item" style="background: none !important;">Home</a>
							<div class="navbar-item has-dropdown is-hoverable">
								<a href="" class="navbar-item" style="background: none !important;">Camera Parts</a>
								<div class="navbar-dropdown is-boxed is-hidden-mobile">
									<a href="" class="navbar-item">Category 1</a>
									<a href="" class="navbar-item">Category 2</a>
									<a href="" class="navbar-item">Category 3</a>
									<a href="" class="navbar-item">Category 4</a>
									<a href="" class="navbar-item">Category 5</a>
								</div>
							</div>
							<div class="navbar-item has-dropdown is-hoverable">
								<a href="" class="navbar-item" style="background: none !important;">Accesorries</a>
								<div class="navbar-dropdown is-boxed is-hidden-mobile">
									<a href="" class="navbar-item">Category 1</a>
									<a href="" class="navbar-item">Category 2</a>
									<a href="" class="navbar-item">Category 3</a>
									<a href="" class="navbar-item">Category 4</a>
									<a href="" class="navbar-item">Category 5</a>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</section>

	<section class="hero">
		<div class="hero-body">
			<div class="container">
				<div class="columns is-mobile">
					<div class="column">
						<h2 class="title header">MetroFocus</h2>
						<p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="title-heading">
					<h2 class="text" style="font-size: 1.3rem; color: #2a2a2a!important; ">Create an account</h2>
					<!-- <?php echo $message; ?> -->
				</div>
				<div class="columns form-container is-centered">
					<div class="column is-half">
						<form action="../php/signup.php" method="POST" onsubmit="return Validate()" name="vform">
							<div class="field">
								<label class="label">First Name</label>
					    			<div class="control has-icons-left has-icons-right">
						    			<input class="input" name="fname" id="fname" type="text" placeholder="First Name">
						    				<span class="icon is-small is-left">
					        					<i class="fas fa-user"></i>
			   		        				</span>
				     	    				<span class="icon is-small is-right">
		   			        					<i id="ficon" class=""></i>
						    				</span>
						    				<p class="help is-danger" id="fapp"></p>
						    				<!-- <p class="help is-success">This username is available</p> -->
						    				<!-- <p class="help is-danger">Invalid Email</p> -->
			     					</div>
			     			</div>
							<div class="field">
								<label class="label">Last Name</label>
					    			<div class="control has-icons-left has-icons-right">
						    			<input class="input" name="lname" id="lname" type="text" placeholder="Last Name">
						    				<span class="icon is-small is-left">
					        					<i class="fas fa-user"></i>
			   		        				</span>
				     	    				<span class="icon is-small is-right">
		   			        					<i id="licon" class=""></i>
						    				</span>
						    				<p class="help is-danger" id="lapp"></p>
			     					</div>
			     			</div>
							<div class="field">
								<label class="label">Email</label>
					    			<div class="control has-icons-left has-icons-right">
						    			<input class="input" id="email" name="email" type="text" placeholder="Email">
						    				<span class="icon is-small is-left">
					        					<i class="fas fa-envelope"></i>
			   		        				</span>
				     	    				<span class="icon is-small is-right">
		   			        					<i id="eicon" class=""></i>
						    				</span>
						    				<p class="help is-danger" id="eapp"></p>
			     					</div>
			     			</div>
							<div class="field">
								<label class="label">Password</label>
					    			<div class="control has-icons-left has-icons-right">
						    			<input class="input" id="password" name="password" type="password" placeholder="Password">
						    				<span class="icon is-small is-left">
					        					<i class="fas fa-key"></i>
			   		        				</span>
				     	    				<span class="icon is-small is-right">
		   			        					<i id="picon" class=""></i>
						    				</span>
						    				<p class="help is-danger" id="papp"></p>
			     					</div>
			     			</div>
							<div class="field">
								<label class="label">Confirm Password</label>
					    			<div class="control has-icons-left has-icons-right">
						    			<input class="input" id="cpassword" name="cpassword" type="password" placeholder="Confirm Password">
						    				<span class="icon is-small is-left">
					        					<i class="fas fa-key"></i>
			   		        				</span>
				     	    				<span class="icon is-small is-right">
		   			        					<i id="cpicon" class=""></i>
						    				</span>
						    				<p class="help is-danger" id="cpapp"></p>
			     					</div>
			     			</div>
							<hr>
							<p class="note">By clicking “Create an account” below, you agree to our terms of service and privacy statement. We’ll occasionally send you account related emails.</p>
							<hr>
							<button class="button is-success" type="submit" name="btnSignup">Create an account</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-foot">
			<?php include('../includes/footer.php'); ?>
		</div>
	</section>
	<script>


var firstname = document.forms['vform']['fname'];
var lastname = document.forms['vform']['lname'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var cpassword = document.forms['vform']['cpassword'];

var firstname_error = document.getElementById('fapp');
var lastname_error = document.getElementById('lapp');
var email_error = document.getElementById('eapp');
var password_error = document.getElementById('papp');
var cpassword_error = document.getElementById('cpapp');

firstname.addEventListener('blur', firstnameVerify, true);
lastname.addEventListener('blur', lastnameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
cpassword.addEventListener('blur', cpasswordVerify, true);



function Validate() {

  if (firstname.value == "") {
    firstname_error.textContent = "Enter your First Name";
    $("#fname").addClass("is-danger");
	$("#ficon").removeClass("fas fa-check");
	$("#ficon").addClass("fas fa-exclamation-triangle");
    firstname.focus();
    return false;
  }
  if (lastname.value == "") {
    lastname_error.textContent = "Enter your Last Name";
    $("#lname").addClass("is-danger");
	$("#licon").removeClass("fas fa-check");
	$("#licon").addClass("fas fa-exclamation-triangle");
    lastname.focus();
    return false;
  }
  if (email.value == "") {
    email_error.textContent = "Enter your Email";
    $("#email").addClass("is-danger");
	$("#email").removeClass("fas fa-check");
	$("#eicon").addClass("fas fa-exclamation-triangle");
    email.focus();
    return false;
  }
  if (password.value == "") {
    password_error.textContent = "Enter your Password";
    $("#password").addClass("is-danger");
	$("#password").removeClass("fas fa-check");
	$("#picon").addClass("fas fa-exclamation-triangle");
    password.focus();
    return false;
  }
  if (cpassword.value == "") {
    cpassword_error.textContent = "Confirm your Password";
    $("#cpassword").addClass("is-danger");
	$("#cpassword").removeClass("fas fa-check");
	$("#cpicon").addClass("fas fa-exclamation-triangle");
    password.focus();
    return false;
  }
  // check if the two passwords match
  if (password.value != cpassword.value) {
    cpassword_error.textContent = "Confirm your Password";
    $("#cpassword").addClass("is-danger");
	$("#cpassword").removeClass("fas fa-check");
	$("#cpicon").addClass("fas fa-exclamation-triangle");
	cpassword.focus();
    return false;
  }
}
// event handler functions
function firstnameVerify() {
  if (firstname.value != "") {
   firstname_error.innerHTML = "";
   $("#fname").removeClass("is-danger");$
   $("#fname").addClass("is-success");
   $("#ficon").removeClass("fas fa-exclamation-triangle");
   $("#ficon").addClass("fas fa-check");
   return true;
  }
  else{
  	firstname_error.textContent = "Enter your First Name";
    $("#fname").addClass("is-danger");
	$("#ficon").removeClass("fas fa-check");
	$("#ficon").addClass("fas fa-exclamation-triangle");
    return false;
  }
}
function lastnameVerify() {
  if (lastname.value != "") {
   lastname_error.innerHTML = "";
   $("#lname").removeClass("is-danger");$
   $("#lname").addClass("is-success");
   $("#licon").removeClass("fas fa-exclamation-triangle");
   $("#licon").addClass("fas fa-check");
   return true;
  }
  else{
  	lastname_error.textContent = "Enter your Last Name";
    $("#lname").addClass("is-danger");
	$("#licon").removeClass("fas fa-check");
	$("#licon").addClass("fas fa-exclamation-triangle");
    return false;
  }
}
function emailVerify() {
   var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   if(email.value == "") {
  	email_error.textContent = "Enter your Email";
    $("#email").addClass("is-danger");
	$("#email").removeClass("fas fa-check");
	$("#eicon").addClass("fas fa-exclamation-triangle");
    return false;
  }
  if(regex.test(email.value)==false){
  	email_error.textContent = "Invalid Email";
	$("#email").addClass("is-danger");
	$("#eicon").removeClass("fas fa-check");
	$("#eicon").addClass("fas fa-exclamation-triangle");
  }
  else{
    email_error.textContent = "";
    $("#email").removeClass("is-danger");$
    $("#email").addClass("is-success");
    $("#eicon").removeClass("fas fa-exclamation-triangle");
    $("#eicon").addClass("fas fa-check");
   // return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
    password_error.innerHTML = "";
   $("#password").removeClass("is-danger");$
   $("#password").addClass("is-success");
   $("#picon").removeClass("fas fa-exclamation-triangle");
   $("#picon").addClass("fas fa-check");
    return true;
  }
  else{
  	 password_error.textContent = "Enter your Password";
    $("#password").addClass("is-danger");
	$("#password").removeClass("fas fa-check");
	$("#picon").addClass("fas fa-exclamation-triangle");
    return false;
  }
}
function cpasswordVerify() {
  if(password.value != cpassword.value){
  	cpassword_error.textContent = "Confirm your Password";
    $("#cpassword").addClass("is-danger");
	$("#cpassword").removeClass("fas fa-check");
	$("#cpicon").addClass("fas fa-exclamation-triangle");
    return false;
  }
  if(cpassword.value != "") {
    cpassword_error.innerHTML = "";
   $("#cpassword").removeClass("is-danger");$
   $("#cpassword").addClass("is-success");
   $("#cpicon").removeClass("fas fa-exclamation-triangle");
   $("#cpicon").addClass("fas fa-check");
    return true;
  }
  else{
  	cpassword_error.textContent = "Confirm your Password";
    $("#cpassword").addClass("is-danger");
	$("#cpassword").removeClass("fas fa-check");
	$("#cpicon").addClass("fas fa-exclamation-triangle");
    return false;
  }
}

	
	// 	function firstname(){	
	// 	var fname = document.getElementById('fname').value;	
	// 	if(fname == ""){
	// 		$("#fname").addClass("is-danger");
	// 		$("#ficon").removeClass("fas fa-check");
	// 		$("#ficon").addClass("fas fa-exclamation-triangle");
	// 		$("#fapp").empty();
	// 		$("#fapp").append("<p class='help is-danger'>Enter your First Name</p>");
	// 		fname.focus();
	// 		return false;
	// 	}
	// 	else{
	// 		$("#fname").removeClass("is-danger");$
	// 		$("#fname").addClass("is-success");
	// 		$("#ficon").removeClass("fas fa-exclamation-triangle");
	// 		$("#ficon").addClass("fas fa-check");
	// 		$("#fapp").empty();
	// 		return true;
	// 	}
	// }
	// 	function lastname(){
	// 		var lname = document.getElementById('lname').value;
	// 	if(!isNaN(lname)){
	// 		$("#lname").addClass("is-danger");
	// 		$("#licon").removeClass("fas fa-check");
	// 		$("#licon").addClass("fas fa-exclamation-triangle");
	// 		$("#lapp").empty();
	// 		$("#lapp").append("<p class='help is-danger'>Enter your Last Name</p>");
	// 	}
	// 	else{
	// 		$("#lname").removeClass("is-danger");$
	// 		$("#lname").addClass("is-success");
	// 		$("#licon").removeClass("fas fa-exclamation-triangle");
	// 		$("#licon").addClass("fas fa-check");
	// 		$("#lapp").empty();
	// 	}
	// }
	// function emails(){
	// 		var email = document.getElementById('email').value;
	// 		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	// 	if(!isNaN(email)){
	// 		$("#email").addClass("is-danger");
	// 		$("#eicon").removeClass("fas fa-check");
	// 		$("#eicon").addClass("fas fa-exclamation-triangle");
	// 		$("#eapp").empty();
	// 		$("#eapp").append("<p class='help is-danger'>Enter your Email</p>");
	// 	}
	// 	else if(regex.test(email)==false){
	// 		$("#email").addClass("is-danger");
	// 		$("#eicon").removeClass("fas fa-check");
	// 		$("#eicon").addClass("fas fa-exclamation-triangle");
	// 		$("#eapp").empty();
	// 		$("#eapp").append("<p class='help is-danger'>Invalid Email</p>");
	// 	}
	// 	else{
	// 		$("#email").removeClass("is-danger");$
	// 		$("#email").addClass("is-success");
	// 		$("#eicon").removeClass("fas fa-exclamation-triangle");
	// 		$("#eicon").addClass("fas fa-check");
	// 		$("#eapp").empty();
	// 	}
	// }
	// function pass(){
	// 		var password = document.getElementById('password').value;
	// 	if(password == ""){
	// 		$("#password").addClass("is-danger");
	// 		$("#picon").removeClass("fas fa-check");
	// 		$("#picon").addClass("fas fa-exclamation-triangle");
	// 		$("#papp").empty();
	// 		$("#papp").append("<p class='help is-danger'>Enter your Password</p>");
	// 	}
	// 	else{
	// 		$("#password").removeClass("is-danger");$
	// 		$("#password").addClass("is-success");
	// 		$("#picon").removeClass("fas fa-exclamation-triangle");
	// 		$("#picon").addClass("fas fa-check");
	// 		$("#papp").empty();
	// 	}
	// }
	// function cpass(){
	// 		var cpassword = document.getElementById('cpassword').value;
	// 		var password = document.getElementById('password').value;
	// 	if(cpassword == ""){
	// 		$("#cpassword").addClass("is-danger");
	// 		$("#cpicon").removeClass("fas fa-check");
	// 		$("#cpicon").addClass("fas fa-exclamation-triangle");
	// 		$("#cpapp").empty();
	// 		$("#cpapp").append("<p class='help is-danger'>Enter your Password</p>");
	// 	}
	// 	else if((password==cpassword)==false){
	// 		$("#cpassword").addClass("is-danger");
	// 		$("#cpicon").removeClass("fas fa-check");
	// 		$("#cpicon").addClass("fas fa-exclamation-triangle");
	// 		$("#cpapp").empty();
	// 		$("#cpapp").append("<p class='help is-danger'>Confirm your Password</p>");
	// 	}
	// 	else{
	// 		$("#cpassword").removeClass("is-danger");$
	// 		$("#cpassword").addClass("is-success");
	// 		$("#cpicon").removeClass("fas fa-exclamation-triangle");
	// 		$("#cpicon").addClass("fas fa-check");
	// 		$("#cpapp").empty();
	// 	}
	// }
	// function Clickmoto(){
	// 		var fname,lname,email,pass,cpass;
	// 		fname = document.getElementById('fname').value;
	// 		lname = document.getElementById('lname').value;
	// 		email = document.getElementById('email').value;
	// 		pass = document.getElementById('password').value;
	// 		cpass = document.getElementById('cpassword').value;
	// 		if(fname == ""){
	// 			$("#fname").addClass("is-danger");
	// 			$("#ficon").addClass("fas fa-exclamation-triangle");
	// 			$("#fapp").empty();
	// 			$("#fapp").append("<p class='help is-danger'>Enter your First Name</p>");
	// 		}
	// 		if(lname == ""){
	// 			$("#lname").addClass("is-danger");
	// 			$("#licon").addClass("fas fa-exclamation-triangle");
	// 			$("#lapp").empty();
	// 			$("#lapp").append("<p class='help is-danger'>Enter your Last Name</p>");
	// 		}
	// 		if(email == ""){
	// 			$("#email").addClass("is-danger");
	// 			$("#eicon").addClass("fas fa-exclamation-triangle");
	// 			$("#eapp").empty();
	// 			$("#eapp").append("<p class='help is-danger'>Enter your First Name</p>");
	// 		}
	// 		if(pass == ""){
	// 			$("#password").addClass("is-danger");
	// 			$("#picon").addClass("fas fa-exclamation-triangle");
	// 			$("#papp").empty();
	// 			$("#papp").append("<p class='help is-danger'>Enter your First Name</p>");
	// 		}
	// 		if(cpass == ""){
	// 			$("#cpassword").addClass("is-danger");
	// 			$("#cpicon").addClass("fas fa-exclamation-triangle");
	// 			$("#cpapp").empty();
	// 			$("#cpapp").append("<p class='help is-danger'>Enter your First Name</p>");
	// 		}

	// 	}
	</script>
	<script src="../js/jquery.min.js"></script>
</body>

	
