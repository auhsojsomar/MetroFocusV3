	<!-- bulma core css -->
	<link rel="stylesheet" href="../bulma/css/bulma.min.css">

	<!-- font awesome css + icons -->
	<link rel="stylesheet" href="../fontawesome/css/all.css">
	<link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">

	<link rel="stylesheet" href="../css/loginpage.css">
	<link rel="stylesheet" href="../css/footer.css">
	<title>MetroFocus - Login</title>


<section class="hero is-fullheight">
	<div class="hero-head">
		
	</div>
	<div class="hero-body">
		<div class="container">
			<div class="columns is-mobile is-multiline is-centered">
				<div class="column is-half">
					<div class="logo has-text-centered">
						<a href=""><img src="" class="image" alt="LOGO"></a>
					</div>
					<form action="../php/loginform.php" method="post">
						<div class="form-heading">
							<h2 class="subtitle has-text-centered">Please login to proceed.</h2>
						</div>
						<div class="box">
							<div class="field">
							<label for="label_email">Email Address</label>
							  <p class="control has-icons-left has-icons-right">
							    <input class="input is-rounded" name="username" type="email" placeholder="youremail@example.com">
							    <span class="icon is-small is-left">
							      <i class="fas fa-envelope"></i>
							    </span>
							    <span class="icon is-small is-right">
							      <i class="fas fa-check"></i>
							    </span>
							  </p>
							</div>
							<div class="field">
							<label for="label_pwd">Password</label>
							<label for="forgot_pwd" style="float: right; cursor"><a href="">Forgot password?</a></label>
							  <p class="control has-icons-left">
							    <input class="input  is-rounded" name="password" type="password" placeholder="enter your password">
							    <span class="icon is-small is-left">
							      <i class="fas fa-lock"></i>
							    </span>
							  </p>
							</div>
							<button class="button is-warning is-fullwidth has-text-centered" type="submit" name="btnLogin">Login</button>
						</div>
						<div class="field is-centered" id="footer-box">
							<div class="box">
								<p>Need an account? <span><a href="signuppage.php">Create one here</a></span> </p>
							</div>
						</div>
					</form>
					<nav class="level">
						<div class="level-item has-text-centered">
							<div>
								<p class="heading"><a href="">Terms</a></p>
							</div>
						</div>
						<div class="level-item has-text-centered">
							<div>
								<p class="heading"><a href="">Privacy</a></p>
							</div>
						</div>
						<div class="level-item has-text-centered">
							<div>
								<p class="heading"><a href="">Security</a></p>
							</div>
						</div>
						<div class="level-item has-text-centered">
							<div>
								<p class="heading"><a href="">Contact</a></p>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="hero-foot">
		
	</div>
</section>


