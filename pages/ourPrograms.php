<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Asgardian Nursery School</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="../css/ourPrograms.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<?php
			require_once('../layout/menu.php');
		?>
	
	<div class="divider"></div>

	<div id = "programHead">
		<span style = 'color:blue'> Our Programs </span>
	</div> <br><br>

	<div id = "programBody">
		<p>
			At Asgardian Nursery School, we offer a wide range of subjects to make your child an
			all-round student. Aside the regular curriculum, we pay close attention to extra-curricular activities so that
			your child can have skills in other areas aside from academics.
			We teach Maths, Science and English, as required by the Ghanaian curriculum but some of the extra-curricular classes we offer here are:
		</p>
		<ul>
			<li> Languages: French, Spanish, and German </li>
			<li> Music: we teach your child how to play the violin, the piano and drums. We also offer special singing classes </li>
			<li> Dance: we offer beginner dance classes. </li>
			<li> Arts and Crafts: we help your children train the creative parts of their brains with this very special arts and crafts program </li>
		</ul>
		<br><br>

		<span style = 'color: teal'> * All of these extra-curricular activites are a part of our after-school program </span><br>
		Any parents interested in letting their child join in must sign up with their children's class teachers or at the receptionist's desk.
		<br><br>
		<a href = "index.html"> Back to Home Page </a>
	</div>

	<footer id="footer">
		<div class="container">
			<section>
				<article class="col-1">
					<h3>Contact</h3>
					<ul>
						<li class="address"><a href="#">CT 3433<br>Cantonments, Accra</a></li>
						<li class="mail"><a href="https://asgardnursery.wordpress.com/">sentinels@gmail.com</a></li>
						<li class="phone last"><a href="#">(971) 536 845 924</a></li>
					</ul>
				</article>
				<article class="col-3">
					<h3>Social media</h3>
					<p>You can follow us on social media.</p>
					<ul>
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="google-plus"><a href="#">Google+</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="pinterest"><a href="#">Pinterest</a></li>
					</ul>
				</article>
			</section>
			<p class="copy">Copyright 2017 Asgardian Nursery School. Created by <a href="https://asgardnursery.wordpress.com/" title="Designed by The Sentinels" target="_blank"> The Sentinels</a>. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	<div id="fancy">
		<h2>Request information</h2>
		<form action="#">
			<div class="left">
				<fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
				<fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
				<fieldset class="subject"><select><option>Choose subject...</option><option>Choose subject...</option><option>Choose subject...</option></select></fieldset>
			</div>
			<div class="right">
				<fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" type="submit">Send request</button>
			</div>
		</form>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='../js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>
