<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Asgardian Nursery School</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="../css/admissions.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<?php
			require_once ('../layout/menu.html');
		?>
	<div class="divider"></div>

<div id = "midhead">
	<h1> Hello! Welcome to the Online Admissions Page </h1>

	<h4> Child's Personal Information </h4>
	<span style= 'color:red'>*</span> Required Fields <br><br>
	</div>

	<div id = "mid" class="panel">
		<form method = "post" action = "admissionspage2.html" name = "form">

<!--personal information -->
		<div class="form-group col-md-4">
			<span style= 'color:red'>*</span> First Name: <input type = "text" id = "fname" class="form-control">
		</div>
		<div class="form-group col-md-4">
			Middle Name: <input type = "text" id= "midname" class="form-control">
		</div>
		<div class="form-group col-md-4">
			<span style= 'color:red'>*</span> Last Name: <input type = "text" id = "lname" class="form-control">
		  <br><br>

		</div>
		<div class="form-group col-md-4">
			<span style= 'color:red'>*</span> Preferred Name: <input type = "text" id = "prefname" class="form-control"> <br><br>
		</div>
			
		<div class="form-group col-md-4">
			<span style= 'color:red'>*</span> Age: <input type = "text" maxlength=2 id = "age"class="form-control"><br><br>
		</div>
		  
		<div class="form-group col-md-4">
		  <span style= 'color:red'>*</span> Sex: <select id="sex">
		    <option> Select... </option>
		    <option> Male </option>
		    <option> Female </option>
		  </select> <br>
		  <br>
		  </div>

		<div class="form-group col-md-4">
			<span style= 'color:red'>*</span> Date of Birth: <input type = "date" id = "dob" class="form-control">
		  <br><br>
		</div>
			
		<div class="form-group col-md-8 ">
			<span style= 'color:red'>*</span> Place of Birth
		  <input type =  "text" placeholder="City/Town" id = "city" class="form-control">
		  <input type =  "text" placeholder="Region" id = "region" class="form-control">
		  <input type =  "text" placeholder="Country" id = "country" class="form-control">
		  <br><br>
		</div>
		  
		<div class="form-group col-md-4">
			<span style= 'color:red'>*</span> Nationality: <input type= "text" id = "nationality" class="form-control"><br><br>
		</div>
		 
		<div class="form-group col-md-4">
			<span style= 'color:red'>*</span> Home address <input type = "text" placeholder = "City/Town, Region, Country" id = "home" class="form-control"> <br><br>
		</div>
		  
		<div class="form-group col-md-4">
			<span style= 'color:red'>*</span> Postal address <input type = "text" id = "postaladdress" class="form-control"><br><br>
		</div>
		  


-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 <!--contact information  -->
 <div id="midhead">
		   <h4>Contact Information</h4>
		   </div>
		<div class="form-group col-md-3">
			  <span style= 'color:red'>*</span> Contact Name: <input type = "text" id = "contactname" class="form-control col-md-4"><br><br>
			  </div>

			  <div class="form group col-md-3">
			  <span style= 'color:red'>*</span> Relationship to Child: <input type = "text" id = "relationship" class="form-control"><br><br>
			  </div>
			  <div class="form group col-md-3">
			  <span style= 'color:red'>*</span>Phone Number:
			  <input type = "tel" placeholder = "primary number" id = "pnumber" class="form-control">
			  <input type = "tel" placeholder="secondary number" id = "snumber" class="form-control">
			<br><br>
			</div>
			<div class="form group col-md-3">
			<span style= 'color:red'>*</span>  The applicant lives with:
			 <input type = "radio" id = "oneparent" name = "selector" >One parent 
			 <input type = "radio" id = "twoparents" name = "selector" >Two parents 
			 <input type = "radio" id = "guardian" name = "selector" > Guardian(s)
			 <br><br>
			</div>
		<div class="form group col-md-4">
		<h4> <span style= 'color: teal'> * Next Page: Previous Schools Attended </span> <h4>
			<input type = "button" value = "Next Page" id = "submit" onclick="validateIndex()" class=" btn btn-primary form-control">
			</div>
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

	<script type = "text/javascript" src = "../js/admissionspage1.js">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='../js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>
