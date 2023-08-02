<!DOCTYPE html>
<html class="page" lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="style.css" />
	<title>Destiny matrix | Blog</title>
</head>

<body class="page__body blog-page">
	<!-- Loading screen -->
	<div class="loading-screen">
		<img srcset="
		/resources/background-svg/Unionmobile.svg 576w,
		/resources/background-svg/Union.svg 800w
	" sizes="(max-width: 576px) 440px,
						800px" src="/resources/background-svg/Union.svg" alt="Loading..." />
	</div>

	<!-- Overlap -->
	<div class="overlap">
		<div class="overlap-top">
			<div class="inline-svg">
				<img src="/resources/background-svg/personal-top.svg" alt="background top1">
			</div>

			<div class="inline-svg">
				<img src="/resources/background-svg/blog-top.svg" alt="background top3">
			</div>
		</div>

		<div class="overlap-bottom">
			<div class="inline-svg">
				<img src="/resources/background-svg/personal-bottom.svg" alt="background bottom 1">
			</div>

			<div class="inline-svg">
				<img src="/resources/background-svg/personal-top.svg" alt="background bottom 1">
			</div>
		</div>
	</div>
	<?php include 'header.php'; ?>

	<main>
		<article>
			<div class="container d-block-md">
				<h1>Blog</h1>
			</div>

			<!-- Popular block -->
			<section>
				<div class="popular d-block-xl">

					<h3 class="popular__title">Popular</h3>

					<!-- Cards -->
					<div class="popular__content">
						<article class="popular__card">
							<a href="" class="popular-img">
								<picture>
									<source srcset="
												./resources/img/blog-descr-img-mob1.webp,
												./resources/img/blog-descr-img-mob1x2.webp 2x
											" media="(max-width: 500px)" />
									<source media="(max-width: 500px)"
										srcset="./resources/img/blog-descr-img-mob1.jpg, ./resources/img/blog-descr-img-mob1x2.jpg 2x" />
									<source media="(min-width: 500px)" srcset="
												./resources/img/blog-descr-img1.webp,
												./resources/img/blog-descr-img1x2.webp 2x
											" />
									<img src="./resources/img/blog-descr-img1.jpg" srcset="
												./resources/img/blog-descr-img1x2.jpg 2x
											" alt="Zodiac Signs" />
								</picture>
							</a>

							<div class="popular__description">
								<a href="">
									<h4 class="popular__subtitle">Blog post 1</h4>
								</a>

								<p class="read-more">
									22 Arcanum in the "plus": The main thing in this person is the spontaneity of feelings,
									completefreedom and...
								</p>
								<a href="" class="read-more-btn">read more...</a>
							</div>

						</article>

						<article class="popular__card">

							<a href="" class="popular-img">
								<picture>
									<source srcset="
													./resources/img/blog-descr-img-mob2.webp,
													./resources/img/blog-descr-img-mob2x2.webp 2x
												" media="(max-width: 500px)" />
									<source media="(max-width: 500px)"
										srcset="./resources/img/blog-descr-img-mob2.jpg, ./resources/img/blog-descr-img-mob2x2.jpg 2x" />
									<source media="(max-width: 500px)"
										srcset="./resources/img/blog-descr-img2.webp, ./resources/img/blog-descr-img2x2.webp 2x" />
									<img src="./resources/img/blog-descr-img2.webp" srcset="
												./resources/img/blog-descr-img2x2.webp 2x
											" alt="landscape photo of mountains under starry sky at nighttime" />
								</picture>
							</a>

							<div class="popular__description">
								<a href="">
									<h4 class="popular__subtitle">Blog post 2</h4>
								</a>

								<p class="read-more">
									22 Arcanum in the "plus": The main thing in this person is the spontaneity of feelings,
									completefreedom and...
								</p>
								<a href="" class="read-more-btn">read more...</a>
							</div>
						</article>

						<article class="popular__card">

							<a href="" class="popular-img">
								<picture>
									<source srcset="
										./resources/img/blog-descr-img-mob3.webp,
										./resources/img/blog-descr-img-mob3x2.webp 2x" media="(max-width: 500px)" />
									<source media="(max-width: 500px)"
										srcset="./resources/img/blog-descr-img-mob3.jpg, ./resources/img/blog-descr-img-mob3x.jpg 2x" />
									<source media="(max-width: 500px)"
										srcset="./resources/img/blog-descr-img3.webp, ./resources/img/blog-descr-img3x2.webp 2x" />
									<img src="./resources/img/blog-descr-img3.jpg" srcset="
												./resources/img/blog-descr-img3x2.jpg 2x
											" alt="an abstract image of an orange and pink flower" />
								</picture>
							</a>

							<div class="popular__description">
								<a href="">
									<h4 class="popular__subtitle">Blog post 3</h4>
								</a>

								<p class="read-more">
									22 Arcanum in the "plus": The main thing in this person is the spontaneity of feelings, complete
									freedom
									and...
								</p>
								<a href="" class="read-more-btn">read more...</a>
							</div>
						</article>

					</div>
				</div>
			</section>

			<!-- More in Blog block -->
			<section>
				<div class="container more-block d-block-md">

					<h3 class="more-title">More in Blog</h3>

					<!-- Cards -->
					<div class="more-block__content">
						<article class="more-block__card">

							<div class="more-block__description">
								<a href="">
									<h4 class="more-block__subtitle">Blog post 4</h4>
								</a>

								<p class="read-more">
									22 Arcanum in the "plus": The main thing in this person is the spontaneity of feelings, complete
									freedom
									and...
								</p>

								<a href="#" class="read-more-btn">read more...</a>
							</div>

							<a href="" class="more-img">
								<picture>
									<source media="(min-width: 500px)" srcset="
												./resources/img/blog-descr-img1.webp,
												./resources/img/blog-descr-img1x2.webp 2x
											" />
									<img src="./resources/img/blog-descr-img1.jpg" srcset="
												./resources/img/blog-descr-img1x2.jpg 2x
											" alt="Zodiac Signs" />
								</picture>
							</a>
						</article>

						<article class="more-block__card">

							<div class="more-block__description">
								<a href="">
									<h4 class="more-block__subtitle">Blog post 5</h4>
								</a>

								<p class="read-more">
									22 Arcanum in the "plus": The main thing in this person is the spontaneity of feelings, complete
									freedom
									and...
								</p>
								<a href="" class="read-more-btn">read more...</a>
							</div>

							<a href="" class="more-img">
								<picture>
									<source media="(max-width: 500px)"
										srcset="./resources/img/blog-descr-img2.webp, ./resources/img/blog-descr-img2x2.webp 2x" />
									<img src="./resources/img/blog-descr-img2.webp" srcset="
												./resources/img/blog-descr-img2x2.webp 2x
											" alt="landscape photo of mountains under starry sky at nighttime" />
								</picture>
							</a>
						</article>

						<article class="more-block__card">

							<div class="more-block__description">
								<a href="">
									<h4 class="more-block__subtitle">Blog post 6</h4>
								</a>

								<p class="read-more">
									22 Arcanum in the "plus": The main thing in this person is the spontaneity of feelings, complete
									freedom
									and...
								</p>
								<a href="" class="read-more-btn">read more...</a>
							</div>

							<a href="" class="more-img">
								<picture>
									<source media="(max-width: 500px)"
										srcset="./resources/img/blog-descr-img3.webp, ./resources/img/blog-descr-img3x2.webp 2x" />
									<img src="./resources/img/blog-descr-img3.jpg" srcset="
									./resources/img/blog-descr-img3x2.jpg 2x
											" alt="an abstract image of an orange and pink flower" />
								</picture>
							</a>
						</article>
					</div>
				</div>

			</section>
		</article>
	</main>

	<?php include 'footer-personal.php'; ?>
	<script src="/js/main.js"></script>
</body>

</html>