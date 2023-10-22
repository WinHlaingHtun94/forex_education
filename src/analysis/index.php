<?php
    require_once('../php/init.php');
    require_once('../php/layouts/page_header.php');
    $thisPage = "analysis";
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
				<div class="ctAnalysis">
                    <div class="ctInner block">
                        <h2 class="leadTitle" data-aos="zoom-in">Daily Analysis Of MKFX</h2>
                        <div id="images">
                            <div class="day">
                                <h3 class="title">22.10.2023</h3>
                                <ul>
                                    <li><img src="<?php echo SITE_URL;?>assets/img/analysis.jpg" alt="Picture 1"></li>
                                    <li><img src="<?php echo SITE_URL;?>assets/img/analysis.jpg" alt="Picture 2"></li>
                                    <li><img src="<?php echo SITE_URL;?>assets/img/analysis.jpg" alt="Picture 3"></li>
                                    <li><img src="<?php echo SITE_URL;?>assets/img/analysis.jpg" alt="Picture 3"></li>
                                </ul>
                            </div>
                            <div class="day">
                                <h3 class="title">21.10.2023</h3>
                                <ul>
                                    <li><img src="<?php echo SITE_URL;?>assets/img/analysis.jpg" alt="Picture 1"></li>
                                    <li><img src="<?php echo SITE_URL;?>assets/img/analysis.jpg" alt="Picture 2"></li>
                                    <li><img src="<?php echo SITE_URL;?>assets/img/analysis.jpg" alt="Picture 3"></li>
                                    <li><img src="<?php echo SITE_URL;?>assets/img/analysis.jpg" alt="Picture 3"></li>
                                </ul>
                            </div>
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
    <script>
        //image Viewer
        const gallery = document.getElementById('images');
        const viewer = new Viewer(gallery);
    </script>
