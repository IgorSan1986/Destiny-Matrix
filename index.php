<!DOCTYPE html>
<html class="page" lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css" />
		<title>Destiny matrix</title>
	</head>
	<body class="page__body home">
	<?php include 'header.php'; ?>

		<main>
			<article>
				<div class="container welcome-block d-block-md">
					<h1>
						Welcome to the <br />
						Matrix of Destiny
					</h1>

					<p>
						Here, we offer you the convenience of calculating
						your very own Matrix of Destiny with a full
						transcript based on your date of birth. Discover the
						hidden energies within your matrix through our
						automatic decoding process, and gain valuable
						recommendations on how to effectively harness and
						work with these energies.<br />
						Start shaping your destiny today!
					</p>

					<section class="form-date-of-birth" action="">

						<button id="personal" data-form="form-personal"
							class="grid-form__item1 form-btn form-btn--active"
							aria-expanded="true" aria-controls="personal"
							type="button"
						>
							Personal
						</button>

						<button id="compatibility" data-form="form-compatibility"
							class="grid-form__item2 form-btn" 
							aria-expanded="false" aria-controls="compatibility"
							type="button"
						>
							Compatibility
						</button>

						<form id="form-personal"
							class="grid-form__item3 personal" action="">
							<ul class="grid-list__container">
								<li class="grid-list-item1">
									<label class="visually-hidden" for="name">Enter your name</label>
									<input id='name'
										class="form-btn"
										type="text"
										id="name"
										name="name"
										placeholder="Your name"
									/>
								</li>
								<li class="grid-list-item2">
									<button id='female-btn' data-form="female-button"
										class="form-btn form-btn--active"
										type="button"
									>
										F
									</button>
								</li>
								<li class="grid-list-item3">
									<label class="visually-hidden" for="date">Enter your date of birth</label>
									<input id='date-of-birth'
										class="form-btn"
										type="text"
										id="date"
										name="date"
										placeholder="Date of Birth *"
									/>
								</li>
								<li class="grid-list-item4">
									<button id='male-btn' data-form="male-button"
										class="form-btn" type="button">
										M
									</button>
								</li>
								<li class="grid-list-item5">
									<button id="calculate-btn"
										class="form-btn form-btn--active"
										type="submit"
									>
										Calculate
									</button>
								</li>
							</ul>
						</form>
						
						<form id="form-compatibility"
							class="grid-form__item3 compatibility d-none " action="">
							<ul class="grid-list__container">
								<li class="grid-list-item1 compatibility">
									<label class="visually-hidden" for="date-partner1">Enter date of birth for partner 1</label>
									<input
										class="form-btn"
										type="text"
										id="date-partner1"
										name="date-partner1"
										placeholder="Date of Birth - Partner 1 *"
									/>
								</li>
								<li class="grid-list-item3 compatibility">
									<label class="visually-hidden" for="date-partner1">Enter date of birth for partner 1</label>
									<input
										class="form-btn"
										type="text"
										id="date-partner2"
										name="date-partner2"
										placeholder="Date of Birth - Partner 2 *"
									/>
								</li>
								<li class="grid-list-item5  compatibility">
									<button
										class="form-btn form-btn--active"
										type="submit"
									>
										Calculate
									</button>
								</li>
							</ul>
						</form>

					</section>
				</div>
			</article>

			<article>
				<div class="container destiny-matrix-description d-block-sm">
					<h2>What is the Destiny or Fate Matrix?</h2>

					<p>
						The Destiny Matrix Method is a revolutionary
						approach to understanding oneself, utilizing the
						powerful insights from the 22 major arcana tarot
						cards and their archetypes.
					</p>
					<p>
						This method offers an unparalleled level of
						accuracy, providing deep and meaningful information
						for individuals like you. The best part? It's
						incredibly user-friendly, designed to be easily
						understood by anyone.
					</p>

					<div class="description--subtitle">
						<section>
							<h3>Are you in search of answers?</h3>
							<p>
								Imagine having a powerful tool at your
								fingertips that can provide accurate and
								meaningful information about your innermost
								characteristics.
							</p>
						</section>

						<section>
							<h3>
								Discover your purpose and live a meaningful
							</h3>
							<p>
								Don't let uncertainty hold you back any
								longer. Embrace the opportunity to embark on
								a meaningful and purpose-driven existence.
								Take the first step towards a more
								fulfilling life by discovering your unique
								path today.
							</p>
						</section>
					</div>
				</div>
			</article>

			<article>
				<div class="container our-blog d-block-md">
					<h2>Our Blog</h2>

					<div class="our-blog--value">
						<section class="blog-content">
							<a href="#">
								<picture>
									<source
										srcset="
											./resources/img/blog-descr-img-mob1.webp,
											./resources/img/blog-descr-img-mob1x2.webp 2x
										"
										media="(max-width: 500px)"
									/>
									<source
										media="(max-width: 500px)"
										srcset="./resources/img/blog-descr-img-mob1.jpg, ./resources/img/blog-descr-img-mob1x2.jpg 2x"
									/>
									<source
										media="(min-width: 500px)"
										srcset="
											./resources/img/blog-descr-img1.webp,
											./resources/img/blog-descr-img1x2.webp 2x
										"
									/>
									<img
										src="./resources/img/blog-descr-img1.jpg"
										srcset="
											./resources/img/blog-descr-img1x2.jpg 2x
										"
										alt="Zodiac Signs"
									/>
								</picture>
							</a>
	
							<div class="blog-content__description">
								<a href="#">
									<h3>22 Arcanum, The Fool</h3>
								</a>
	
								<p>
									22 Arcanum in the "plus": The main thing in
									this person is the spontaneity of feelings,
									complete freedom and...
								</p>
							</div>
						</section>
	
						<section class="blog-content">
							<a href="#">
								<picture>
									<source
										srcset="
												./resources/img/blog-descr-img-mob2.webp,
												./resources/img/blog-descr-img-mob2x2.webp 2x
											"
										media="(max-width: 500px)"
									/>
									<source
										media="(max-width: 500px)"
										srcset="./resources/img/blog-descr-img-mob2.jpg, ./resources/img/blog-descr-img-mob2x2.jpg 2x"
									/>
									<source
										media="(max-width: 500px)"
										srcset="./resources/img/blog-descr-img2.webp, ./resources/img/blog-descr-img2x2.webp 2x"
									/>
									<img
										src="./resources/img/blog-descr-img2.webp"
										srcset="
											./resources/img/blog-descr-img2x2.webp 2x
										"
										alt="landscape photo of mountains under starry sky at nighttime"
									/>
								</picture>
							</a>
	
							<div class="blog-content__description">
								<a href="#">
									<h3>22 Arcanum, The Fool</h3>
								</a>
	
								<p>
									22 Arcanum in the "plus": The main thing in
									this person is the spontaneity of feelings,
									complete freedom and...
								</p>
							</div>
						</section>
	
						<section class="blog-content">
							<a href="#">
								<picture>
									<source
										srcset="
												./resources/img/blog-descr-img-mob3.webp,
												./resources/img/blog-descr-img-mob3x2.webp 2x
											"
										media="(max-width: 500px)"
									/>
									<source
										media="(max-width: 500px)"
										srcset="./resources/img/blog-descr-img-mob3.jpg, ./resources/img/blog-descr-img-mob3x.jpg 2x"
									/>
									<source
										media="(max-width: 500px)"
										srcset="./resources/img/blog-descr-img3.webp, ./resources/img/blog-descr-img3x2.webp 2x"
									/>
									<img
										src="./resources/img/blog-descr-img3.jpg"
										srcset="
											./resources/img/blog-descr-img3x2.jpg 2x
										"
										alt="an abstract image of an orange and pink flower"
									/>
								</picture>
							</a>
							<div class="blog-content__description">
								<a href="#">
									<h3>22 Arcanum, The Fool</h3>
								</a>
								
								<p>
									22 Arcanum in the "plus": The main thing in
									this person is the spontaneity of feelings,
									complete freedom and...
								</p>
							</div>
						</section>
					</div>

					<button class="btn-main" type="button">
						Read more
					</button>
				</div>
			</article>

			<article>
				<div class="container help-block d-block-md">
					<h2>Here's how the Destiny Matrix can help you</h2>
					
					<ul>
						<li>
							<p class="help-icon">👥</p>
							<p>
								Gain a deep understanding of
								<strong>how to communicate</strong>
								effectively with others, fostering stronger
								connections and meaningful relationships.
							</p>
						</li>
						<li>
							<p class="help-icon">🧩</p>
							<p>
								Discover your unique role in the vast
								universe, uncovering your purpose and
								aligning your actions with
								<strong>your true calling</strong>.
							</p>
						</li>
						<li>
							<p class="help-icon">💖</p>
							<p>
								Find out what qualities to look for in a
								compatible partner, allowing you to
								cultivate
								<strong>fulfilling relationships</strong>
								that bring out the best in you.
							</p>
						</li>
						<li>
							<p class="help-icon">🧿</p>
							<p>
								Identify
								<strong>your true talents</strong> and
								unleash your creative potential, empowering
								you to pursue passions and endeavors that
								bring you joy and fulfillment.
							</p>
						</li>
						<li>
							<p class="help-icon">💰</p>
							<p>
								Explore behaviors and professions that can
								bring you
								<strong>financial abundance</strong>,
								helping you make informed decisions to
								enhance your prosperity.
							</p>
						</li>
						<li>
							<p class="help-icon">👨‍👩‍👧</p>
							<p>
								Build strong, nurturing bonds with your
								loved ones, fostering warmth, trust, and
								<strong>connection in your family</strong>
								and personal relationships.
							</p>
						</li>
						<li>
							<p class="help-icon">🧶</p>
							<p>
								Learn how to achieve
								<strong>greater success</strong> in your
								life, tapping into your strengths and
								overcoming obstacles.
							</p>
						</li>
						<li>
							<p class="help-icon">💆🏼‍♀️</p>
							<p>
								Establish a deep and meaningful
								<strong
									>connection with your inner self</strong
								>, accessing inner wisdom, and nurturing
								your spiritual well-being.
							</p>
						</li>
						<li>
							<p class="help-icon">🎯</p>
							<p>
								Get to know what to expect in the
								<strong>upcoming phase of your life</strong>
								and be prepared to achieve better results.
							</p>
						</li>
					</ul>

					<button class="btn-main" type="button">
						Calculate
					</button>
				</div>
			</article>

			<article>
				<div class="container testimonials d-block-lg">
					<h2>Testimonials</h2>
					
					<ul>
						<li>
							<picture>
								<source
									type="image/webp"
									srcset="
										resources/img/testimonials-1.webp,
										resources/img/testimonials-1x2.webp 2x
									"
								/>
								<img
									src="resources/img/testimonials-1.jpg"
									srcset="
										resources/img/testimonials-1x2.jpg 2x
									"
									alt="avatar"
								/>
							</picture>
							<p>
								"I was amazed by the accuracy and depth of
								insights provided by the Destiny Matrix. It
								helped me understand myself on a whole new
								level and gave me clarity in areas I had
								been struggling with. Highly recommended!"
							</p>
							<p>- Sarah</p>
						</li>
						<li>
							<picture>
								<source
									type="image/webp"
									srcset="
										./resources/img/testimonials-2.webp,
										./resources/img/testimonials-2x2.webp 2x
									"
								/>
								<img
									src="./resources/img/testimonials-2.jpg"
									srcset="
										./resources/img/testimonials-2x2.jpg 2x
									"
									alt="avatar"
								/>
							</picture>
							<p>
								"I've tried various self-discovery methods,
								but the Destiny Matrix stood out for its
								simplicity and effectiveness. The free
								calculator alone provided me with valuable
								insights, and I couldn't resist delving
								deeper with the full description. It's been
								a game-changer in understanding myself and
								making positive changes in my life."
							</p>
							<p>- Emily</p>
						</li>
						<li>
							<picture>
								<source
									type="image/webp"
									srcset="
										./resources/img/testimonials-3.webp,
										./resources/img/testimonials-3x2.webp 2x
									"
								/>
								<img
									src="./resources/img/testimonials-3.jpg"
									srcset="
										./resources/img/testimonials-3x2.jpg 2x
									"
									alt="avatar"
								/>
							</picture>
							<p>
								"The Destiny Matrix Calculator gave me a
								glimpse into my unique energies and their
								distribution. It was fascinating to see how
								these energies manifest in different aspects
								of my life. I couldn't resist purchasing the
								full description, and it provided me with
								valuable guidance for personal growth. A
								truly transformative experience!"
							</p>
							<p>
								- Sophie
							</p>
						</li>
					</ul>

					<button class="btn-main" type="button">
						Get a full decoding
					</button>

				</div>
			</article>

			<article>
				<div class="container discover-block d-block-lg">
					<h2>Discover the power of the <br />Destiny Matrix</h2>
					<ul>
						<li class="discover-item1">
							<p>
								With our <strong>free calculator</strong>,
								designed to provide you with valuable
								insights into your energies and their
								distribution across different zones. It's
								time to tap into your true potential!
							</p>
						</li>
						<li class="discover-item2">
							<p>
								Using this intuitive tool, you'll receive a
								basic description of your energies, shedding
								light on
								<strong
									>your unique strengths and
									qualities</strong
								>. Gain a deeper understanding of yourself
								and how these energies influence various
								aspects of your life.
							</p>
						</li>
						<li class="discover-item3">
							<p>
								But that's not all. If you're intrigued and
								want a more
								<strong>comprehensive analysis</strong>, you
								have the option to purchase a full
								description of your energies in each zone.
								Dive even deeper into your unique
								composition and gain actionable knowledge to
								guide your personal growth and
								transformation.
							</p>
					</ul>
					
					<button class="btn-main discover-btn" type="button">
						Full decoding
					</button>
				</div>
			</article>

			<article>
				<div class="container subscribe-block d-block-xl">
					<h2 class="visually-hidden">
						Subscription options for you
					</h2>
					
					<div class="subscribe-block__wrapper">
						<article>
							<h3>First try</h3>
							<ul>
								<li>
									<p>
										<strong
											>The full description of each energy
											in your personal</strong
										>
										matrix will provide you with a
										comprehensive understanding of yourself
										and practical recommendations to enhance
										each sector of your life
									</p>
								</li>
								<li>
									<p>
										Or
										<strong
											>the full description of each energy
											in the Compatibility Matrix</strong
										>
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
							<button
								class="btn-main btn-subscribe"
								type="button"
							>
								Purchase
							</button>
						</article>
						<article>
							<h3>A month together</h3>
							<ul>
								<li>
									<p>
										You will have unlimited access to
										<strong
											>all the functionalities of the
											calculator for an entire
											month</strong
										>. This means you can calculate as many
										compatibility matrices and personal
										matrices as you desire within this
										period.
									</p>
								</li>
							</ul>
							<div class="subscribe-block__price">
								<p>$25</p>
							</div>
							<button
								class="btn-main btn-subscribe"
								type="button"
							>
								Purchase
							</button>
						</article>
						<article>
							<h3>Annual access</h3>
							<ul>
								<li>
									<p>
										Exclusive annual access pass to enjoy
										unlimited usage of
										<strong
											>all functionalities of the
											calculator for a whole year</strong
										>. This means you can calculate as many
										compatibility matrices and personal
										matrices as you desire throughout the
										entire year.
									</p>
								</li>
							</ul>
							<div class="subscribe-block__price">
								<p>$99</p>
							</div>
							<button
								class="btn-main btn-subscribe"
								type="button"
							>
								Purchase
							</button>
						</article>
					</div>
	
					<p>
						Unlock the secrets of your destiny and embark on a
						transformative journey of self-discovery and personal
						growth!
					</p>
				</div>
			</article>
		</main>
		
		<?php include 'footer.php'; ?>
		<script src="/js/main.js"></script>
	</body>
</html>
