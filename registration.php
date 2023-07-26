<!DOCTYPE html>
<html class="page" lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css" />
		<title>Destiny matrix | Log in</title>
	</head>
	<body class="page__body login-page">
	<?php include 'header.php'; ?>
	<body>
	<main>
		<div class="container d-block-md">
			<h1>Welcome</h1>

			<p>
				Take a moment to create your account
			</p>

			<section class="form form-login-registration" 	action="">
				<a href="http://localhost/login.php">
					<button id="login" data-form="form-login"
						class="grid-form__item1"
						aria-expanded="false" aria-controls="form-login"
						type="button"
					>
						Log in
					</button>
				</a>

				<a href="http://localhost/registration.php">
					<button id="registration" data-form="form-registration"
						class="grid-form__item2 form-login-registration--active" 
						aria-expanded="true" aria-controls="form-registration"
						type="button"
					>
						Registration
					</button>
				</a>
				
				<form id="form-registration"
					class="grid-form__item3 registration" action="">
					<ul class="grid-list__container">
						<li class="grid-list-item1 registration">
							<label class="visually-hidden" for="name">Enter your name</label>
							<input
								type="text"
								id="name"
								name="name"
								placeholder="name*"
							/>
						</li>

						<li class="grid-list-item2 registration">
							<label class="visually-hidden" for="email-registration">Enter your email</label>
							<input
								type="email"
								id="email-registration"
								name="email-registration"
								placeholder="Email*"
							/>
						</li>

						<li class="grid-list-item3 registration">
							<input type="text" id="password-registration" name="password-registration" placeholder="Create a Password*">
						</li>

						<li class="grid-list-item4 registration">
							<button id="registration-btn"
								class="form-login-registration--active"
								type="submit"
							>
								Register now
							</button>
						</li>
					</ul>
				</form>
			</section>
			
			<div class="checkbox">
				<input type="checkbox" id="checkbox">
				<label for="checkbox">Newsletter Subscription</label>
			</div>


			<section class="social-login">
					<p>Log in with</p>
					<ul class="social-list">
						<li><a href="#"><i class="icont-facebooklogin"></i></a></li>
						<li><a href="#"><i class="icont-googlelogin"></i></a></li>
						<li><a href="#"><i class="icont-applelogin"></i></a></li>
					</ul>

					<a href="#">Forgot your password?</a>
				</section>
		</div>

		
	</main>
	<?php include 'footer-personal.php'; ?>

	<script src="/js/main.js"></script>
	</body>