<?php
?>
<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Autism Learnability</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="left-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="../html5up-phantom/index-child.html">Learn</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li>
										<a href="#">Menu</a>
										<ul>
											<li><a href="../html5up-phantom/index-child.html">Home</a></li>
											<li><a href="quiz.html">Take the Quiz!</a></li>
											<li><a href="../html5up-phantom/browse-content-child.html">Browse Content</a></li>
											<li><a href="request-content-child.html">Request Content</a></li>
										</ul>
									</li>
									<li><a href="quiz.html">Tests</a></li>
									<li class="break"><a href="scores.html">Scores</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->
				<div class="wrapper">
					<div class="container" id="main">
						<div class="row 150%">
							<div class="4u 12u(narrower)">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<header>
												<h3>Verbal</h3>
											</header>
											<a href="#" class="image featured"><img src="images/picverbal.jpeg" alt="" /></a>
											<p>Verbal/Linguistic learning includes both spoken and written language and encompasses speaking, reading and writing.</p>
											<ul class="actions">
												<li><a href="#" class="button">Start Quiz</a></li>
											</ul>
										</section>
										<section>
											<header>
												<h3>Musical</h3>
											</header>
											<a href="#" class="image featured"><img src="images/picmusical.jpeg" alt="" /></a>
											<p>This learning style is seen in those with a good ability to process and understand sound and to be able to see the rhythms and patterns in sound. </p>
											<ul class="actions">
												<li><a href="#" class="button">Start Quiz</a></li>
											</ul>
										</section>
									</section>

							</div>
							<div class="8u 12u(narrower) important(narrower)">

								<!-- Content -->
									<article id="content">
										<header>
											<h2>What kind of learner are you?</h2>
											<p>Take this quiz frequently to understand your learning style</p>
										</header>
										<?php
											$servername = "pennapps.c9vwrfxwhz2s.us-east-1.rds.amazonaws.com";
											$username = "pennapps";
											$password = "pennapps";
											$dbname = "pennapps2017";

											// Create connection
											$conn = mysqli_connect($servername, $username, $password);

											// Check connection
											if (!$conn) {
											    die("Connection failed: " . mysqli_connect_error());
											}
											echo "Connected successfully";

											$sql = "SELECT verbal, musical, logical, visual, kinaesthetic FROM child_statistics";
											$result = $conn->query($sql);

											echo "Hi Samantha, Here are your results!"

											if ($result->num_rows > 0) {

											    // output data of each row
											    while($row = $result->fetch_assoc()) {
											        echo "Verbal: " . $row["verbal"]. " Musical: " . $row["musical"]. " Logical: " . $row["logical"]. " Visual: " . $row["visual"]. " Kinaesthetic: " . $row["kinaesthetic"]. " Class: " . $row["result"]
											    }
											} else {
											    echo "0 results";
											}
										?>
									</article>

							</div>
						</div>
						<div class="row features">
							<section class="4u 12u(narrower) feature">
								<header>
									<h3>Logical</h3>
								</header>
								<div class="image-wrapper first">
									<a href="#" class="image featured"><img src="images/piclogical.jpeg" width="30" height="210" alt="" /></a>
								</div>
								<p>Logical/Mathematical learners are good at seeing patterns and using logic for reasoning.</p>
								<ul class="actions">
									<li><a href="#" class="button">Start Quiz</a></li>
								</ul>
							</section>
							<section class="4u 12u(narrower) feature">
								<header>
									<h3>Visual</h3>
								</header>
								<div class="image-wrapper">
									<a href="#" class="image featured"><img src="images/picvisual.jpeg" width="30" height="210" alt="" /></a>
								</div>
								<p>Visual Learners prefer using images and they easily see pictures and maps and visualise outcomes in their mind. </p>
								<ul class="actions">
									<li><a href="#" class="button">Start Quiz</a></li>
								</ul>
							</section>
							<section class="4u 12u(narrower) feature">
								<header>
									<h3>Kinaesthetic</h3>
								</header>
								<div class="image-wrapper">
									<a href="#" class="image featured"><img src="images/pickinaesthetic.jpeg" width="30" height="210" alt="" /></a>
								</div>
								<p>Kinaesthetic Learners need to be moving, using their body and sense of touch to interact with their world. </p>
								<ul class="actions">
									<li><a href="#" class="button">Start Quiz</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<div id="footer" class="container">
						<header class="major">
							<h2>Euismod aliquam vehicula lorem</h2>
							<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit<br />
							dolor neque semper magna lorem ipsum feugiat veroeros lorem ipsum dolore.</p>
						</header>
						<div class="row">
							<section class="6u 12u(narrower)">
								<form method="post" action="#">
									<div class="row 50%">
										<div class="6u 12u(mobile)">
											<input name="name" placeholder="Name" type="text" />
										</div>
										<div class="6u 12u(mobile)">
											<input name="email" placeholder="Email" type="text" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" value="Send Message" /></li>
												<li><input type="reset" value="Clear form" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="6u 12u(narrower)">
								<div class="row 0%">
									<ul class="divided icons 6u 12u(mobile)">
										<li class="icon fa-twitter"><a href="#"><span class="extra">twitter.com/</span>untitled</a></li>
										<li class="icon fa-facebook"><a href="#"><span class="extra">facebook.com/</span>untitled</a></li>
										<li class="icon fa-dribbble"><a href="#"><span class="extra">dribbble.com/</span>untitled</a></li>
									</ul>
									<ul class="divided icons 6u 12u(mobile)">
										<li class="icon fa-instagram"><a href="#"><span class="extra">instagram.com/</span>untitled</a></li>
										<li class="icon fa-youtube"><a href="#"><span class="extra">youtube.com/</span>untitled</a></li>
										<li class="icon fa-pinterest"><a href="#"><span class="extra">pinterest.com/</span>untitled</a></li>
									</ul>
								</div>
							</section>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="menu">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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
	<?php
		mysqli_close($conn);
	?>
</html>