<?php
	require_once('php/init.php');
	$thisPage = "index";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<title>MKFX</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="copyright" content="">
	<meta name="author" content="">
	<meta name="Targeted Geographic Area" content="Japan">
	<meta name="coverage" content="Japan">
	<meta name="rating" content="general">
	<meta name="content-language" content="ja">
	<meta name="format-detection" content="telephone=no">
	<link rel="canonical" href="">

	<meta property="og:site_name" content="">
	<meta property="og:title" content="">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<meta property="og:description" content="">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@">
	<meta name="twitter:image" content="">

	<!-- build:css assets/css/vender.min.css -->

	<!-- endbuild -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="assets/css/common.min.css">
</head>

<body>

	<!-- wrapper -->
	<div id="wrapper">

		<!-- innerWrapper -->
		<div id="innerWrapper">
			<div class="loading active">
				<div class="container">
					<div class="one"></div>
					<div class="two"></div>
					<div class="three"></div>
					<div class="four"></div>
					<div class="five"></div>
				</div>
			</div>

			<!-- header -->
			<?php require_once("php/layouts/contents_header.php"); ?>
			<!-- /header -->

			<!-- ctArea -->
			<div id="ctArea">
				<div class="ctTop">
					<div class="ctInner">
						<div class="banner col" data-aos="fade-up">
							<figure class="imgGp" data-aos="fade-right">	
								<img src="assets/img/laptop.png" alt="bull" width="1280" height="1063">
								<figcaption id="liveTxt" class="liveTxt"></figcaption>
							</figure>
							<div class="txtgp" data-aos="fade-left">
								<h2>Unlock Your Forex Potential: Learn, Trade, Succeed!</h2>
								<p>At Forex Education Hub, we are dedicated to helping traders of all levels unlock their full potential in the world of foreign exchange trading. Our comprehensive educational resources, expert guidance, and community support empower you to become a confident and successful forex trader.</p>
							</div>
						</div>
					</div>
					<section class="block bg" id="about">
						<div class="ctInner">
							<h2 class="leadTitle" data-aos="fade-up">About Us</h2>
							<div class="col">
								<div class="left" data-aos="fade-left">
									<figure class="imgGp">
										<img src="assets/img/about_us.png" alt="about_us" width="1713" height="1409">
									</figure>
								</div>
								<div class="right" data-aos="fade-right">
									<p>At Forex Education Hub, we are dedicated to helping traders of all levels unlock their full potential in the world of foreign exchange trading. Our comprehensive educational resources, expert guidance, and community support empower you to become a confident and successful forex trader.</p>
								</div>
							</div>
						</div>
					</section>
					<section class="block">
						<div class="ctInner">
							<h2 class="leadTitle" data-aos="fade-up">Why Choose Us?</h2>
							<div class="col reverse">
								<div class="left" data-aos="fade-right">
									<figure class="imgGp">
										<img src="assets/img/why_choose.png" alt="why choose" width="2083" height="2083">
									</figure>
								</div>
								<div class="right" data-aos="fade-left">
									<p>Our commitment to your success sets us apart:</p>
									<ul>
										<li><strong>Expert Educators:</strong> Learn from seasoned professionals with years of trading experience.</li>
										<li><strong>Comprehensive Curriculum:</strong> Access a wide range of courses, from beginner basics to advanced strategies.</li>
										<li><strong>Interactive Learning:</strong> Engage in hands-on practice, live webinars, and interactive quizzes.</li>
										<li><strong>Community Support:</strong> Join a thriving community of traders, share insights, and collaborate for success.</li>
										<li><strong>Latest Market Insights:</strong> Stay updated with our market analysis and trading tips.</li>
									</ul>
								</div>
							</div>
						</div>
					</section>
					<section class="block bg" id="course">
						<div class="ctInner">
							<h2 class="leadTitle" data-aos="fade-up">Our Courses</h2>
							<div class="col">
								<div class="left" data-aos="fade-left">
									<figure class="imgGp">
										<img src="assets/img/courses.png" alt="courses" width="1280" height="792">
									</figure>
								</div>
								<div class="right" data-aos="fade-right">
									<p>Our curriculum covers a wide range of topics, including:</p>
									<ul class="list">
										<li>Forex Basics for Beginners</li>
										<li>Technical and Fundamental Analysis</li>
										<li>Risk Management Strategies</li>
										<li>Advanced Trading Techniques</li>
										<li>Psychology of Trading</li>
									</ul>
									<p>Whether you're just starting or looking to enhance your skills, our courses cater to traders of all levels.</p>
								</div>
							</div>
						</div>
					</section>
					<section class="block" id="contact">
						<div class="ctInner">
							<h2 class="leadTitle" data-aos="fade-up">Contact Us</h2>
							<div class="col reverse">
								<div class="left" data-aos="fade-right">
									<figure class="imgGp">
										<img src="assets/img/contact.png" alt="courses" width="791" height="1280">
									</figure>
								</div>
								<div class="right" data-aos="fade-left">
									<form action="" method="POST" class="contactForm">
										<dl>
											<dt><label for="name">Name</label></dt>
											<dd><input type="text" id="name" name="name" placeholder="Please enter your name.."></dd>
										</dl>
										<dl>
											<dt><label for="email">Email</label></dt>
											<dd><input type="email" id="email" name="email" placeholder="Please enter your email.."></dd>
										</dl>
										<dl>
											<dt><label for="text">Inquiry</label></dt>
											<dd><textarea name="text" id="text" placeholder="Please enter your inquiry.."></textarea></dd>
										</dl>
										<input type="submit" class="submit" name="submit" value="Submit">
									</form>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			<!-- /ctArea -->

			<!-- footer -->
			<?php require_once("php/layouts/contents_footer.php"); ?>
			<!-- /footer -->

		</div>
		<!-- / innerWrap -->

	</div>
	<!-- / wrapper -->


	<!--build:js assets/js/vendor.min.js -->
	<script type="text/javascript" src="assets/js/vendor/jquery-3.5.2.min.js"></script>
	<script type="text/javascript" src="assets/js/vendor/jquery.easing.js"></script>
	<script type="text/javascript" src="assets/js/vendor/typer.js"></script>
	<!-- endbuild -->

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script type="text/javascript" src="assets/js/common.min.js"></script>
	<script type="text/javascript" src="assets/js/other.js"></script>
</body>

</html>
