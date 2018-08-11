<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
					<div class="navbar-brand">
						<a href="" class="navbar-item">
							<img src="" alt="MEtroFocusLOGO" class="image">
						</a>

						<a role="button" class="navbar-burger is-hidden-desktop" aria-label="menu" aria-expanded="false">
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
						<div class="navbar-end">
							<div class="navbar-item navbar-search">
								<div class="field">
									<form action="" method="get">
										<div class="field">
											<p class="control has-icons-right is-dark">
												<input type="search" placeholder="Search" autocomplete="off" class="input">
												<span class="icon is-small is-right">
													<i class="fas fa-search"></i>
												</span>
											</p>
										</div>
									</form>
									<!-- Dito sa part na to js script na kapag nag type ng word si customer automatic magbibigay ng suggestion. Magiging active lang tong dropdown-content kapag nagtype si client e.g Camera Part, Brand, Accessorie or kahit anong related as long as makikita sa shop -->
									<div class="search-suggest" style="position: relative;">
										<div class="dropdown-menu" style="display: none;">
											<div class="dropdown-content">
												<a href="" class="dropdown-item">
												<!-- insert name of category here -->
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="navbar-item is-paddingless is-guest">
								<a href="pages/loginpage.php" class="button thickbox is-text is-nolink is-uppercase">
									<span class="icon is-small">
									<i class="fas fa-sign-in-alt"></i>
									</span>
									<span>Login</span>
								</a>
							</div>
							<span class="navbar-item is-paddingless is-guest">
								or
							</span>
							<div class="navbar-item is-paddingless is-guest">
								<a href="pages/signuppage.php" class="button thickbox is-text is-nolink is-uppercase is-primary">
									<span>Signup</span>
								</a>
							</div>
						</div>
					</div>
				</nav>