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
			<div class="login-wrapper">
				<h1 class="login-title">It’s so nice to see you again!</h1>
				
				<p>
					Take the opportunity to explore your inner self at the most ideal moment.
				</p>

				<section class="form form-login-registration" action="">
					<div>
						<a href="http://localhost/login.php">
							<button id="login" data-form="form-login"
								class="grid-form__item1 form-login-registration--active"
								aria-expanded="true" aria-controls="form-login"
								type="button"
							>
								Log in
							</button>
						</a>
					</div>

					<div>
						<a href="http://localhost/registration.php">
							<button id="registration" data-form="form-registration"
								class="grid-form__item2" 
								aria-expanded="false" aria-controls="registration"
								type="button"
							>
								Registration
							</button>
						</a>
					</div>
	
					<form id="form-login"
						class="grid-form__item3 login" action="">
						<div class="grid-list__container">
							<div class="grid-list-item1">
								<label class="visually-hidden" for="email">email</label>
								<input id='email'
									type="email"
									id="email"
									name="email"
									placeholder="Email"
								/>
							</div>
							<div class="grid-list-item2">
								<label class="visually-hidden" for="password">Enter your password</label>
								<input id='password'
								
									type="password"
									id="password"
									name="password"
									placeholder="Password"
								/>
							</div>
							<div class="grid-list-item3">
								<button id="login-btn"
									class="form-login-registration--active"
									type="submit"
								>
									Log in
								</button>
							</div>
						</div>
					</form>
				</section>
				
				<section class="social-login">
					<p>Log in with</p>
					<ul class="social-list">
						<li><a class="inline-svg facebook-login" href="#">
							<img src="/resources/svg/facebooklogin.svg" alt="facebook login">
						</a></li>
						<li><a class="inline-svg" href="#">
							<img class="google-login" src="/resources/svg/googlelogin.svg" alt="google login">
						</a></li>
						<li><a href="#">
							<img class="apple-login" src="/resources/svg/applelogin.svg" alt="apple login">
						</a></li>
					</ul>

					<a href="#">Forgot your password?</a>
				</section>
			</div>
		</div>
	</main>
	<?php include 'footer-personal.php'; ?>

	<script src="/js/main.js"></script>
	</body>