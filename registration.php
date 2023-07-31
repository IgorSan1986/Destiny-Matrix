<!DOCTYPE html>
<html class="page" lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css" />
		<title>Destiny matrix | Registration</title>
	</head>
	<body class="page__body login-page secondary-bg">
		<div class="overlap">
			<div class="overlap-top">
				<div class="inline-svg">
						<img src="/resources/background-svg/personal-top.svg" alt="background bottom 1">
				</div>
			</div>

			<div class="overlap-bottom">
				<div class="inline-svg">
					<img src="/resources/background-svg/personal-bottom.svg" alt="background bottom 1">
				</div>
			</div>
		</div>

	<?php include 'header.php'; ?>
	<body>
	<main>
		<div class="container d-block-md">
			<div class="registration-wrapper">
				<h1 class="login-title">Welcome</h1>
				
				<p>
					Take a moment to create your account
				</p>

				<section class="form login-registration">
					<div class="login-registration__btn">
						<a href="http://localhost/login.php">
							<button id="login" data-form="form-login"
								aria-expanded="false" aria-controls="form-login"
								type="button"
							>
								Log in
							</button>
						</a>
					</div>
	
					<div class="login-registration__btn">
						<a href="http://localhost/registration.php">
							<button id="registration" data-form="form-registration"
								class="login-registration--active" 
								aria-expanded="true" aria-controls="form-registration"
								type="button"
							>
								Registration
							</button>
						</a>
					</div>
					
					<form id="form-registration"
						class="form-login-registration" action="">

						<div class="form-login-registration__item1">
							<label class="visually-hidden" for="name">Enter your name</label>
							<input
								type="text"
								id="name"
								name="name"
								placeholder="Name*"
							/>
						</div>
	
						<div class="form-login-registration__item2">
							<label class="visually-hidden" for="email-registration">Enter your email</label>
							<input
								type="email"
								id="email-registration"
								name="email-registration"
								placeholder="Email*"
							/>
						</div>
	
						<div class="form-login-registration__item3">
							<input type="text" id="password-registration" name="password-registration" placeholder="Create a Password*">
						</div>
	
						<div class="form-login-registration__item4">
							<button id="registration-btn"
								class="login-registration--active"
								type="submit"
							>
								Register now
							</button>
						</div>

					</form>
					
					<div class="checkbox">
						<input type="checkbox" class="custom-checkbox" id="checkbox" name="checkbox" value="yes">
						<label for="checkbox">Newsletter Subscription</label>
					</div>
					
					<section class="social-login">
						<p>Log in with</p>
						
						<ul class="social-list">
							<li>
								<a class="inline-svg facebook-login" href="#">
									<img src="/resources/svg/facebooklogin.svg" alt="facebook login">
								</a>
							</li>
							<li>
								<a class="inline-svg google-login" href="#">
									<img src="/resources/svg/googlelogin.svg" alt="google login">
								</a>
							</li>
							<li>
								<a class="inline-svg apple-login" href="#">
									<img src="/resources/svg/applelogin.svg" alt="apple login">
								</a>
							</li>
						</ul>
					</section>
				</section>
			</div>		
		</div>
	</main>
	<?php include 'footer-personal.php'; ?>

	<script src="/js/main.js"></script>
	</body>