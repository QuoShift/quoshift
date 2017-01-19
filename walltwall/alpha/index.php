<?php include "../input.php"; ?>
<!DOCTYPE HTML>
<!--
	Orig: html5up
	This website is a demonstration created by QuoShift.com. It is a rough mockup.
-->
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Banner -->
				<section id="banner">
					<h2><?php echo $title; ?></h2>
					<p>Another fine responsive site template freebie by HTML5 UP.</p>
					<ul class="actions">
						<li><a href="#" class="button special">Home</a></li>
						<?php 
							// Display nav.
							for ($i = 0; $i < count($nav); $i++) {
								// echo $nav[$i];
								echo '<li><a href="#" class="button">' . $nav[$i] . '</a></li>';
							}
						?>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2><?php echo $secondaryheading; ?></h2>
							<p><?php echo $secondarypara; ?></p>
						</header>
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<?php echo '<img src="' . $feature1image . '">'; ?>
								<h3><?php echo $feature1title; ?></h3>
								<p><?php echo $feature1content; ?></p>
							</section>
							<section>
								<?php echo '<img src="' . $feature2image . '">'; ?>
								<h3><?php echo $feature2title; ?></h3>
								<p><?php echo $feature2content; ?></p>
							</section>
						</div>
					</section>

				</section>

			<!-- CTA -->
				<section id="cta">

					<h2><?php echo $ctaheading; ?></h2>
					<p><?php echo $ctapara; ?></p>

					<form>
						<div class="row uniform 50%">
							<div class="12u 12u(mobilep)">
								<?php echo '<input type="submit" value="' . $ctabuttontext . '" class="fit" />'; ?>
							</div>
						</div>
					</form>

				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; <?php echo $businessname; ?>. All rights reserved.</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>