<?php
    require_once('../php/init.php');
    require_once('../php/layouts/page_header.php');
    $thisPage = "detail";
?>

<body>

	<!-- wrapper -->
	<div id="wrapper">

		<!-- innerWrapper -->
		<div id="innerWrapper">

			<!-- header -->
			<?php require_once("../php/layouts/contents_header.php"); ?>
			<!-- /header -->

			<!-- ctArea -->
			<div id="ctArea">
				<div class="ctCourses">
                    <div class="ctInner block">
                        <h2 class="leadTitle" data-aos="fade-up">Courses of MKMyanmar for Forex Trading</h2>
                        <figure class="banner" data-aos="fade-up">
                            <img src="<?php echo SITE_URL;?>assets/img/course_banner.png" alt="course_banner" width="1280" height="867">
                        </figure>
                        <p class="txt" data-aos="fade-right">Welcome! Are you new to trading forex?<br>The courses of Forex Trading is our free online course that helps beginners learn how to trade forex. If you've always wanted to learn to trade but have no idea where to begin, then this course is for you.</p>
                    </div>
                    <div class="courses">
                        <div class="ctInner">
                            <ul class="card">
                                <li  data-aos="flip-up">
                                    <a href="<?php echo SITE_URL;?>courses/detail.php">
                                        <figure>
                                            <img src="../assets/img/course.jpg" alt="courses01" width="5812" height="3875">
                                        </figure>
                                        <div class="txt">
                                            <h3>Forex Basics for Beginners</h3>
                                            <p>Learn the basics of forex trading and how to get started in this exciting market.</p>
                                        </div>
                                        <p class="more">see more...</p>
                                    </a>
                                </li>
                                <li  data-aos="flip-down">
                                    <a href="<?php echo SITE_URL;?>courses/detail.php">
                                        <figure>
                                            <img src="../assets/img/course.jpg" alt="courses02" width="5812" height="3875">
                                        </figure>
                                        <div class="txt">
                                            <h3>Technical and Fundamental Analysis</h3>
                                            <p>Learn how to analyze the market using both technical and fundamental analysis.</p>
                                        </div>
                                        <p class="more">see more...</p>
                                    </a>
                                </li>
                                <li  data-aos="flip-up">
                                    <a href="<?php echo SITE_URL;?>courses/detail.php">
                                        <figure>
                                            <img src="../assets/img/course.jpg" alt="courses03" width="5812" height="3875">
                                        </figure>
                                        <div class="txt">
                                            <h3>Risk Management Strategies</h3>
                                            <p>Learn how to manage your risk and protect your capital using proven risk management strategies.</p>
                                        </div>
                                        <p class="more">see more...</p>
                                    </a>
                                </li>
                                <li  data-aos="flip-down">
                                    <a href="<?php echo SITE_URL;?>courses/detail.php">
                                        <figure>
                                            <img src="../assets/img/course.jpg" alt="courses04" width="5812" height="3875">
                                        </figure>
                                        <div class="txt">
                                            <h3>Advanced Trading Techniques</h3>
                                            <p>Learn advanced trading techniques that will help you take your trading to the next level.</p>
                                        </div>
                                        <p class="more">see more...</p>
                                    </a>
                                </li>
                                <li  data-aos="flip-up">
                                    <a href="<?php echo SITE_URL;?>courses/detail.php">
                                        <figure>
                                            <img src="../assets/img/course.jpg" alt="courses01" width="5812" height="3875">
                                        </figure>
                                        <div class="txt">
                                            <h3>Forex Basics for Beginners</h3>
                                            <p>Learn the basics of forex trading and how to get started in this exciting market.</p>
                                        </div>
                                        <p class="more">see more...</p>
                                    </a>
                                </li>
                                <li  data-aos="flip-down">
                                    <a href="<?php echo SITE_URL;?>courses/detail.php">
                                        <figure>
                                            <img src="../assets/img/course.jpg" alt="courses02" width="5812" height="3875">
                                        </figure>
                                        <div class="txt">
                                            <h3>Technical and Fundamental Analysis</h3>
                                            <p>Learn how to analyze the market using both technical and fundamental analysis.</p>
                                        </div>
                                        <p class="more">see more...</p>
                                    </a>
                                </li>
                                <li  data-aos="flip-up">
                                    <a href="<?php echo SITE_URL;?>courses/detail.php">
                                        <figure>
                                            <img src="../assets/img/course.jpg" alt="courses03" width="5812" height="3875">
                                        </figure>
                                        <div class="txt">
                                            <h3>Risk Management Strategies</h3>
                                            <p>Learn how to manage your risk and protect your capital using proven risk management strategies.</p>
                                        </div>
                                        <p class="more">see more...</p>
                                    </a>
                                </li>
                                <li  data-aos="flip-down">
                                    <a href="<?php echo SITE_URL;?>courses/detail.php">
                                        <figure>
                                            <img src="../assets/img/course.jpg" alt="courses04" width="5812" height="3875">
                                        </figure>
                                        <div class="txt">
                                            <h3>Advanced Trading Techniques</h3>
                                            <p>Learn advanced trading techniques that will help you take your trading to the next level.</p>
                                        </div>
                                        <p class="more">see more...</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
			</div>
			<!-- ctArea -->

			<!-- footer -->
			<?php require_once("../php/layouts/contents_footer.php"); ?>
			<!-- /footer -->

		</div>
		<!-- / innerWrap -->

	</div>
	<!-- / wrapper -->


	<?php require_once("../php/layouts/page_footer.php"); ?>
