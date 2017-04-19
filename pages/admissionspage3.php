<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Asgardian Nursery School</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="../css/admissions.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<?php
			require_once('../layout/menu.php');
		?>
	<div class="divider"></div>

<div id = "midhead">
	<h1> Online Admissions Page <h1>

	<h4>  Sibling Information </h4>
	</div>

	<div id = "mid">
		<form method = "post" action = "admissionspage4.html" name = "form">
 		 <h3><span style= 'color:red'>*</span> Does the applicant have any siblings? </h3>
 		 <select id = "siblings">
 		   <option> Select... </option>
 		   <option> Yes </option>
 		   <option> No </option>
 		 </select>
 		 <br><br>

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

 		 <div id = "sib1">
 		 <h4> <span style= 'color: red'> If yes, please fill the form below for a maximum of 3 siblings</span></h4>

 		 <span style= 'color: blue'> First Sibling </span>
 		   <br><br>
 		 Name <input type = "text" id = "sibname1" class="input">
 		 <br><br>


 		 Current School (if any) <input type = "text" id = "sibsch1" class="input">
 		 Grade <input type = "text" id = "sibgrade1" class="input"><br>
 		 <br>

 		 Are they also applying here?
 		 <input type="checkbox" id="apply"  name="choose" ><label for="apply">Yes</label>
 		 <input type="checkbox" id="apply2"  name="choose2"><label for="apply2">No</label>
 		 <br><br><br>
 		 </div>

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

 		 <div id = "sib2">
 		   <span style= 'color: blue'> Second Sibling </span>
 		   <br><br>
 		   Name <input type = "text" id = "sibname2" class="input">
 		   <br><br>


 		   Current School (if any) <input type = "text" id = "sibsch2" class="input">
 		   Grade <input type = "text" id = "sibgrade2" class="input"><br>
 		   <br>

 		   Are they also applying here?
 		   <input type="checkbox" id="apply3" name="choose3"><label for="apply3">Yes</label>
 		   <input type="checkbox" id="apply4" name="choose4"><label for="apply4">No</label>
 		   <br><br><br>
 		 </div>

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

 		 <div id = "sib3">
 		 <span style= 'color: blue'> Third Sibling </span>
 		 <br><br>
 		 Name <input type = "text" id = "sibname3" class="input">
 		 <br><br>


 		 Current School (if any) <input type = "text" id = "sibsch3" class="input">
 		 Grade <input type = "text" id = "sibgrade3" class="input"><br>
 		 <br>

 		 Are they also applying here?
 		 <input type="checkbox" id="apply5" name="choose5"><label for="apply5">Yes</label>
 		 <input type="checkbox" id="apply6" name="choose6"><label for="apply6">No</label>
 		 <br><br>
 		 </div>

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

		 <h3> <span style= 'color: teal'> * Next Page: Parent / Guardian Information </span> <h3>
 		 <input type = "button" value = "Next Page" id = "nextPage" onclick="validateSiblings()">
		</form>


		<form action = "admissionspage2.html">
		  <input type = "submit" value = "Previous Page" id = "submit">
		</form>
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
			<p class="copy">Copyright 2017 Asgardian Nursery School. Created by <a href="https://asgardnursery.wordpress.com/" title="Designed by The Sentinels" target="_blank">The Sentinels</a>. All rights reserved.</p>
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

	<script type = "text/javascript" src = "../js/admissionspage3.js">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='../js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>
