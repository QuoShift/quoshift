<?php include '../input.php'; ?>
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
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">
					<!-- Logo -->
						<?php 
							if ($logoimage == true) {
								// Show image 
								echo '<img src="' . $logoimageurl .'">';
							} else {
								echo '<h1><a href="#" id="logo">' . $logo .'</a></h1>';
							}
						?>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="#">Home</a></li>
								<?php 
									// Display nav.
									for ($i = 0; $i < count($nav); $i++) {
										// echo $nav[$i];
										echo '<li><a href="#">' . $nav[$i] . '</a></li>';
									}
								?>
							</ul>
						</nav>
				</div>

			<!-- Banner -->
				<section id="banner" style="background-image: url('<?php echo $banner ?>');">
					<header>
						<?php echo '<h2>' . $subtitle .'</h2>'; ?>
					</header>
				</section>
				
			<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<?php echo '<img src="' . $feature1image . '" width="100%" style="padding-bottom:20px;">'; ?>
									<?php echo '<h3>' . $feature1title . '</h3>'; ?>
									<?php echo '<p>' . $feature1content . '</p>'; ?>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<?php echo '<img src="' . $feature2image . '" width="100%" style="padding-bottom:20px;">'; ?>
									<?php echo '<h3>' . $feature2title . '</h3>'; ?>
									<?php echo '<p>' . $feature2content . '</p>'; ?>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<?php echo '<img src="' . $feature3image . '" width="100%" style="padding-bottom:20px;">'; ?>
									<?php echo '<h3>' . $feature3title . '</h3>'; ?>
									<?php echo '<p>' . $feature3content . '</p>'; ?>
								</div>
							</section>
						</div>
					</div>
				</section>

			<!-- Gigantic Heading -->
				<section class="wrapper style2">
					<div class="container">
						<header class="major">
							<?php echo '<h2>' . $secondaryheading . '</h2>'; ?>
							<?php echo '<p>' . $secondarypara . '</p>'; ?>
						</header>
					</div>
				</section>

			

			<!-- CTA -->
				<section id="cta" class="wrapper style3">
					<div class="container">
						<header>
							<?php echo '<h2>' . $ctaheading . '</h2>'; ?>
							<a href="#" class="button"><?php echo $ctabuttontext; ?></a>
						</header>
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<section class="12u 12u(narrower)">
								<h3>Get In Touch</h3>
								<form>
									<div class="row 50%">
										<div class="6u 12u(mobilep)">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="6u 12u(mobilep)">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<center><li><input type="submit" class="button alt" value="Send Message" /></li></center>
											</ul>
											<br />
										</div>
									</div>
								</form>
							</section>
						</div>
					</div>

					<!-- Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						</ul>

					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; <?php echo $businessname; ?>. All rights reserved</li>
							</ul>
						</div>

				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>