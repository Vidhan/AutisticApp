<?php
	$num_verbal = 3;
	$num_musical = 2;
	$num_logical = 4;
	$num_visual = 3;
	$num_kinaesthetic = 0;

	$verbal = 0;
	$musical = 0;
	$logical = 0;
	$visual = 0;
	$kinaesthetic = 0;
	$result = "";
	$max_score = -1.0;

	$quiz_answers=array("q1"=>"red","q2"=>"3","q3"=>"samantha","q4"=>"banana","q5"=>"9","q6"=>"4","q7"=>"6","q8"=>"circle");
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

											$q1 = $_GET["q1"];
											$q2 = $_GET["q2"];
											$q3 = $_GET["q3"];
											$q4 = $_GET["q4"];
											$q5 = $_GET["q5"];
											$q6 = $_GET["q6"];
											$q7 = $_GET["q7"];
											$q8 = $_GET["q8"];

											if(strcmp(strtolower($q1), $quiz_answers["q1"]) == 0) {
												$verbal++;
												$musical++;
												$visual++;
											}
											if(strcmp(strtolower($q2), $quiz_answers["q2"]) == 0) {
												$verbal++;
												$musical++;
												$visual++;
											} 
											if(strcmp(strtolower($q3), $quiz_answers["q3"]) == 0) {
												$verbal++;
											} 
											if(strcmp(strtolower($q4), $quiz_answers["q4"]) == 0) {
												$logical++;
											} 
											if(strcmp(strtolower($q5), $quiz_answers["q5"]) == 0) {
												$logical++;
											} 
											if(strcmp(strtolower($q6), $quiz_answers["q6"]) == 0) {
												$logical++;
											} 
											if(strcmp(strtolower($q7), $quiz_answers["q7"]) == 0) {
												$logical++;
											} 
											if(strcmp(strtolower($q8), $quiz_answers["q8"]) == 0) {
												$visual++;
											} 

											$servername = "pennapps.c9vwrfxwhz2s.us-east-1.rds.amazonaws.com";
											$username = "pennapps";
											$password = "pennapps";
											$dbname = "pennapps2017";

											// Create connection
											$conn = mysqli_connect($servername, $username, $password,$dbname) ;

											// Check connection
											if (!$conn) {
											    die("Connection failed: " . mysqli_connect_error());
											}
											//echo "Connected successfully";
											
											//$rs= mysql_query("select * from YEAR",$cn) or die(mysql_error());
											

											$sql = "SELECT verbal, musical, logical, visual, kinaesthetic, result FROM child_statistics;";
											$result = mysqli_query($conn,$sql);
											$num_rows = mysqli_num_rows($result);
											

											echo "Hi Samantha, Here are your results!";
											

											$final_verbal = 0;
											$final_musical = 0;
											$final_logical = 0;
											$final_visual = 0;
											$final_kinaesthetic = 0;
											$final_result = "";
											
											if ($num_rows > 0) {

											    // output data of each row
											    while($row = mysqli_fetch_assoc($result)) {
											        echo "Verbal: " . $row["verbal"]. " Musical: " . $row["musical"]. " Logical: " . $row["logical"]. " Visual: " . $row["visual"]. " Kinaesthetic: " . $row["kinaesthetic"]. " Class: " . $row["result"];
											        <br/>

											        $final_verbal += (float)$row["verbal"];
													$final_musical += (float)$row["musical"];
													$final_logical += (float)$row["logical"];
													$final_visual += (float)$row["visual"];
													$final_kinaesthetic += (float)$row["kinaesthetic"];
											    }
											} else {
												echo $conn->error;
											    echo "0 results";
											}

											$verbal_pct = ($verbal/$num_verbal) * 100;
											$musical_pct = ($musical/$num_musical) * 100;
											$logical_pct = ($logical/$num_logical) * 100;
											$visual_pct = ($visual/$num_visual) * 100;
											$kinaesthetic_pct = ($kinaesthetic/$num_kinaesthetic) * 100;

											$final_verbal = $final_verbal + $verbal_pct;
											$final_musical = $final_musical + $musical_pct;
											$final_logical = $final_logical + $logical_pct;
											$final_visual = $final_visual + $visual_pct;
											$final_kinaesthetic = $final_kinaesthetic + $kinaesthetic_pct;

											$max_score = $verbal;
											$max_feature = "verbal";
											if ($max_score < $musical) {
												$max_score = $musical;
												$max_feature = "musical";
											}
											if ($max_score < $visual) {
												$max_score = $visual;
												$max_feature = "visual";
											}
											if ($max_score < $logical) {
												$max_score = $logical;
												$max_feature = "logical";
											}
											$result = $max_feature;

											$sql = "INSERT INTO child_statistics (verbal, musical, logical, visual, kinaesthetic, result)
											VALUES ($verbal, $musical, $logical, $visual, $kinaesthetic, $result);";

											if ($conn->query($sql) === TRUE) {
											    echo "New record created successfully";
											} else {
											    echo "Error: " . $sql . "<br>" . $conn->error;
											}

											$max_score = $final_verbal;
											$max_feature = "verbal";
											if ($max_score < $final_musical) {
												$max_score = $final_musical;
												$max_feature = "musical";
											}
											if ($max_score < $final_visual) {
												$max_score = $final_visual;
												$max_feature = "visual";
											}
											if ($max_score < $final_logical) {
												$max_score = $final_logical;
												$max_feature = "logical";
											}
											$final_result = $max_feature;

											echo "Final Result: ".$final_result;
											

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
