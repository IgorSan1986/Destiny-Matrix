<!DOCTYPE html>
<html class="page" lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="libs/custom-select/custom-select.css" />
	<link rel="stylesheet" href="style.css" />
	<title>Destiny matrix | Profile</title>
</head>

<body class="page__body profile-page secondary-bg">
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

		<div class="overlap-bottom">
			<div class="inline-svg">
				<img src="/resources/background-svg/personal-bottom.svg" alt="background bottom 1">
			</div>
		</div>
	</div>
	<?php include 'header.php'; ?>
	<main>
		<div class="container d-block-md">
			<div class="tabcontainer">
				<div class="tabheader">
					<ul class="tabheader__items">
						<li class="tabheader__item active">
							<a href="#profile">Profile</a>
						</li>
						<li class="tabheader__item">
							<a href="#upgrade">Upgrade and Subscription</a>
						</li>
						<li class="tabheader__item">
							<a href="#calculation">Calculation</a>
						</li>
						<li class="tabheader__item">
							<a href="#saved">Saved calculations</a>
						</li>
						<li class="tabheader__item">
							<a href="#support">Support</a>
						</li>
						<li class="tabheader__item">
							<a href="#share">Share Your Experience</a>
						</li>
					</ul>

					<div class="tabheader-mobile has-form">
						<form action="">
							<select name="mobile-tabs" id="mobile-tabs">
								<option value="profile">Profile</option>
								<option value="upgrade">Upgrade and Subscription</option>
								<option value="calculation">Calculation</option>
								<option value="saved">Saved calculations</option>
								<option value="support">Support</option>
								<option value="share">Share Your Experience</option>
							</select>
						</form>
					</div>
				</div>

				<div class="tabs">

					<div id="profile" class="tabcontent active">
						<h3 class="tabcontent__title">User name</h3>

						<p class="tabcontent__subtitle">User email</p>

						<form id="form-user" class="form user-form" action="">
							<div class="user-form__input">
								<label class="visually-hidden" for="name-user">Enter your name</label>
								<input id='name-user' type="text" name="name-user" placeholder="Name*" />
							</div>

							<div class="user-form__input">
								<label class="visually-hidden" for="email-user">Enter your email</label>
								<input id='email-user' type="email" name="email-user" placeholder="Email" />
							</div>

							<div class="user-form__label">
								<p>Change your password</p>
							</div>

							<div class="user-form__input">
								<label class="visually-hidden" for="new-password">Enter your new password</label>
								<input id='new-password' type="password" name="new-password" placeholder="New password" />
							</div>

							<div class="user-form__input">
								<label class="visually-hidden" for="reenter-password">Reenter your new password</label>
								<input id='reenter-password' type="password" name="reenter-password" placeholder="Reenter password" />
							</div>

							<div class="checkbox user-form__checkbox">
								<input type="checkbox" class="custom-checkbox" id="checkbox" name="checkbox" value="yes">
								<label for="checkbox">Newsletter Subscription</label>
							</div>

							<div class="user-form__btn">
								<button type="submit" class="user-form--active">Save changes</button>
							</div>

							<div>
								<button>Delete account</button>
							</div>
						</form>
					</div>

					<div id="upgrade" class="tabcontent tabcontent__subscription">
						<div class="tabcontent__title__subscription">
							<h3 class="tabcontent__title">Current subscription</h3>

							<label class="tabcontent__label">You don’t have any subscription yet</label>
						</div>

						<div class="tabcontent__subscription__description">
							<p>
								In the Saved Calculations section of your personal account, you can conveniently access and manage all
								your previous personal calculations
							</p>
						</div>

						<h4 class="tabcontent__subscription__plans">Available plans</h4>

						<div class="tabcontent__plan">
							<div class="subscribe-block__wrapper">
								<article class="subscribe-card">
									<h3>First try</h3>
									<ul>
										<li>
											<p>
												<strong>The full description of each energy
													in your personal</strong>
												matrix will provide you with a
												comprehensive understanding of yourself
												and practical recommendations to enhance
												each sector of your life
											</p>
										</li>
										<li>
											<p>
												Or
												<strong>the full description of each energy
													in the Compatibility Matrix</strong>
												will provide you with understanding of
												your compatibility with others and
												practical advice on how to enhance your
												relationships.
											</p>
										</li>
									</ul>
									<div class="subscribe-block__price">
										<p>$10</p>
									</div>
									<button class="btn-main btn-subscribe" type="button">
										Purchase
									</button>
								</article>
								<article class="subscribe-card">
									<h3>A month together</h3>
									<ul>
										<li>
											<p>
												You will have unlimited access to
												<strong>all the functionalities of the
													calculator for an entire
													month</strong>. This means you can calculate as many
												compatibility matrices and personal
												matrices as you desire within this
												period.
											</p>
										</li>
									</ul>
									<div class="subscribe-block__price">
										<p>$25</p>
									</div>
									<button class="btn-main btn-subscribe" type="button">
										Purchase
									</button>
								</article>
								<article class="subscribe-card">
									<h3>Annual access</h3>
									<ul>
										<li>
											<p>
												Exclusive annual access pass to enjoy
												unlimited usage of
												<strong>all functionalities of the
													calculator for a whole year</strong>. This means you can calculate as many
												compatibility matrices and personal
												matrices as you desire throughout the
												entire year.
											</p>
										</li>
									</ul>
									<div class="subscribe-block__price">
										<p>$99</p>
									</div>
									<button class="btn-main btn-subscribe" type="button">
										Purchase
									</button>
								</article>
							</div>
						</div>
					</div>

					<div id="calculation" class="tabcontent">

						<h3 class="tabcontent__title calculator-title">Calculator of Destiny Matrix</h3>

						<section class="form form-dates" action="">

							<button id="personal" data-form="form-personal" class="grid-form__item1 form-dates--active"
								aria-expanded="true" aria-controls="form-personal" type="button">
								Personal
							</button>

							<button id="compatibility" data-form="form-compatibility" class="grid-form__item2" aria-expanded="false"
								aria-controls=form-compatibility" type="button">
								Compatibility
							</button>

							<form id="form-personal" class="grid-form__item3 personal" action="">
								<ul class="grid-list__container">
									<li class="grid-list-item1">
										<label class="visually-hidden" for="name">Enter your name</label>
										<input id='name' type="text" id="name" name="name" placeholder="Your name" />
									</li>
									<li class="grid-list-item2">
										<button id='female-btn' data-form="female-button" type="button">
											F
										</button>
									</li>
									<li class="grid-list-item3">
										<label class="visually-hidden" for="date">Enter your date of birth</label>
										<input id='date-of-birth' class="" type="text" id="date" name="date"
											placeholder="Date of Birth *" />
									</li>
									<li class="grid-list-item4">
										<button id='male-btn' data-form="male-button" class="form-dates--active" type="button">
											M
										</button>
									</li>
									<li class="grid-list-item5">
										<button id="calculate-btn" class="form-dates--active" type="submit">
											Calculate
										</button>
									</li>
								</ul>
							</form>

							<form id="form-compatibility" class="grid-form__item3 compatibility d-none " action="">
								<ul class="grid-list__container">
									<li class="grid-list-item1 compatibility">
										<label class="visually-hidden" for="date-partner1">Enter date of birth for partner 1</label>
										<input type="text" id="date-partner1" name="date-partner1"
											placeholder="Date of Birth - Partner 1 *" />
									</li>
									<li class="grid-list-item3 compatibility">
										<label class="visually-hidden" for="date-partner1">Enter date of birth for partner 1</label>
										<input type="text" id="date-partner2" name="date-partner2"
											placeholder="Date of Birth - Partner 2 *" />
									</li>
									<li class="grid-list-item5  compatibility">
										<button class="form-dates--active" type="submit">
											Calculate
										</button>
									</li>
								</ul>
							</form>

						</section>
					</div>

					<div id="saved" class="tabcontent">
						<h3 class="tabcontent__title calculator-title">My matrix</h3>

						<div class="form saved-tab">
							<button id="saved-personal" data-form="saved-form-personal" class="grid-form__item1 form-dates--active"
								aria-expanded="true" aria-controls="form-personal" type="button">
								Personal
							</button>

							<button id="saved-compatibility" data-form="saved-form-compatibility" class="grid-form__item2"
								aria-expanded="false" aria-controls=form-compatibility" type="button">
								Compatibility
							</button>
						</div>
					</div>

					<div id="support" class="tabcontent support">
						<h3 class="tabcontent__title">Support</h3>

						<h4 class="tabcontent__subtitle">We're Here to Assist You</h4>

						<p>
							At the Destiny Matrix platform, we value your satisfaction and are committed to providing exceptional
							support throughout your journey. Our dedicated support team is here to address any inquiries or requests
							you may have. We strive to answer all requests within one working day, allowing you to receive the
							assistance you need in a timely manner.
						</p>

						<form class="form support-form" id="support-form" action="">
							<div class="support-form__input">
								<label class="visually-hidden" for="your-name">Enter your name</label>
								<input id='your-name' type="text" name="your-name" placeholder="Your name" />
							</div>

							<div class="support-form__input">
								<label class="visually-hidden" for="your-email">Enter your email</label>
								<input id='your-email' type="email" name="your-email" placeholder="Email" />
							</div>

							<div class="support-form__input">
								<label class="visually-hidden" for="support-textarea">Write your message:</label>
								<textarea id="support-textarea" name="support-textarea" rows="5" cols="50"
									placeholder="Your message"></textarea>
							</div>

							<div>
								<button id="support-submit" type="submit" class="form-dates--active">Send</button>
							</div>

						</form>
					</div>

					<div id="share" class="tabcontent share">
						<h3 class="tabcontent__title">
							Share Your Experience
						</h3>

						<p class="tabcontent__subscription__description">
							We value your feedback and appreciate you taking the time to share your experience with us. Your input is
							crucial in our continuous journey of improvement, as we strive to enhance our services and create a better
							experience for you every day. Together, let's shape the Destiny Matrix platform into something truly
							exceptional through your valuable feedback.
						</p>

						<form class="form share-form" id="share-form" action="">
							<div class="share-form__input">
								<label class="visually-hidden" for="share-name">Enter your name</label>
								<input id='share-name' type="text" name="share-name" placeholder="Your name" />
							</div>

							<div class="rating">
								<input type="radio" name="rating" id="star1" value="1" />
								<label for="star1"></label>
								<input type="radio" name="rating" id="star2" value="2" />
								<label for="star2"></label>
								<input type="radio" name="rating" id="star3" value="3" />
								<label for="star3"></label>
								<input type="radio" name="rating" id="star4" value="4" />
								<label for="star4"></label>
								<input type="radio" name="rating" id="star5" value="5" />
								<label for="star5"></label>
							</div>

							<div class="share-form__input">
								<label class="visually-hidden" for="support-textarea">Write your message:</label>
								<textarea id="share-textarea" name="support-textarea" rows="5" cols="50"
									placeholder="Your message"></textarea>
							</div>

							<div>
								<button id="share-submit" type="submit" class="form-dates--active">Send</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</main>
	<?php include 'footer-personal.php'; ?>

	<script src="/libs/custom-select/custom-select.min.js"></script>
	<script src="/js/main.js"></script>
</body>