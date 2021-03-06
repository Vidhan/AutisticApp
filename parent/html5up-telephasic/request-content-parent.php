<?php
if(isset($_POST['submit']))
{
   sendMailFunc();
} 
function sendMailFunc(){
$apikey = '5aa3ab189d98f5e042f97345cc5696d3-us15';
 
$to_emails = array('vidhana@andrew.cmu.com');
$to_names = array('Vidhan Agarwal');
 
$message = array(
    'html'=>'Yo, this is the <b>html</b> portion',
    'text'=>'Yo, this is the *text* portion',
    'subject'=>'This is the subject',
    'from_name'=>'Me!',
    'from_email'=>'whizvids@gmail.com',
    'to_email'=>$to_emails,
    'to_name'=>$to_names
);
 
$tags = array('WelcomeEmail');
 
$params = array(
    'apikey'=>$apikey,
    'message'=>$message,
    'track_opens'=>true,
    'track_clicks'=>false,
    'tags'=>$tags
);
 
$url = "http://us1.sts.mailchimp.com/1.0/SendEmail";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($params));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$result = curl_exec($ch);
echo $result;
curl_close ($ch);
 
$data = json_decode($result);
echo "Status = ".$data->status."\n";
}
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
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="../html5up-phantom/index-parent.html">Learn</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li>
										<a href="#">Menu</a>
										<ul>
											<li><a href="../html5up-phantom/index-parent.html">Home</a></li>
											<li><a href="quiz.html">Take the Quiz!</a></li>
											<li><a href="../html5up-phantom/browse-content-parent.html">Browse Content</a></li>
											<li><a href="request-content-child.html">Request Content</a></li>
										</ul>
									</li>
									<li><a href="analytics.html">Analytics</a></li>
									<li class="break"><a href="../html5up-phantom/browse-content-parent.html">Browse Content</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->

			<!-- Footer -->
				<div id="footer-wrapper">
					<div id="footer" class="container">
						<header class="major">
							<h2>Request Content</h2>
							<p>You can request for content that best suits your child's learning style. Just let us know what topic you want to learn.</p>
						</header>
						<div class="row">
							<section class="6u 12u(narrower)">
								<form method="post" action="">
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
												<li><input type="submit" value="Request Content" /></li>
												<li><input type="reset" value="Clear form" /></li>
											</ul>
										</div>
									</div>
								</form>
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
</html>