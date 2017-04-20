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

 <!-- beginning of body -->
<div id = "midhead">
	<h1> Online Admissions Page <h1>

	<h4>  <span style = 'color: teal'> Health Information </span> </h4>
	<h4> <span style= 'color: red'> To be Completed by Parent or Guardian </span> </h4>
	<span style= 'color:red'>*</span> Required Fields <br><br>
	</div>

	<div id = "mid">
		<form method = "post" action = "" name = "form">
			<!-- basic student information -->
			<span style= 'color:red'>*</span> Student Name:
	   <input type = "text" placeholder = "Last name" id = "slname" class="input">
	   <input type = "text" placeholder = "First name" id = "sfname" class="input">
	   <br><br>

	   <span style= 'color:red'>*</span> Gender:
	   <input type = "checkbox" id = "male" name = "choose"><label for "male"> Male </label>
	   <input type = "checkbox" id = "female" name = "choose"><label for "female"> Female </label>
	   <br><br>

	   <span style= 'color:red'>*</span> Age: <input type = "number" maxlength = 2 id = "sage" class="input">
	   <span style= 'color:red'>*</span> Date of Birth <input type = "date" id = "sdob" class="input"> <br><br>

	   <span style= 'color:red'>*</span> Nationality: <input type = "text" id = "snationality" class="input"><br><br>

<!--contact information -->
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 <h4> <span style = 'color: teal'> Contact Info </span></h4>
	   <span style= 'color:red'>*</span> Mother's name: <input type = "text" id = "mname" class="input">
	   Business Phone: <input type = "text" id = "mworktel" class="input">
	   <span style= 'color:red'>*</span> Mobile Phone: <input type = "text" id = 'mtel' class="input">
	   <br><br>

	   <span style= 'color:red'>*</span> Father's name: <input type = "text" id = "fname" class="input">
	   Business Phone: <input type = "text" id = "fworktel" class="input">
	   <span style= 'color:red'>*</span> Mobile Phone: <input type = "text" id = "ftel" class="input">
	   <br><br>

	   <span style= 'color:red'>*</span> Preferred Hospital: <input type = "text" id = "hosname" class="input">
	   <span style= 'color:red'>*</span> Doctor's Name: <input type = "text" id = "docname" class="input">
	   <span style= 'color:red'>*</span> Phone: <input type = "text" id = "doctel" class="input">
	   <br><br>

<!--emergency contact information -->
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	   <h4> <span style = 'color: teal'> Emergency Contacts </span> </h4>
	   <span style= 'color: blue'> 1st Contact </span> <br>
	  <span style= 'color:red'>*</span>  Name: <input type = "text" id = "con1name" class="input">
	  <span style= 'color:red'>*</span> Phone: <input type = "text" id = "con1tel" class="input">
	   <span style= 'color:red'>*</span> Relationship to child : <input type = "text" id = "con1relate" class="input">
	   <br><br>

	   <span style= 'color: blue'> 2nd Contact </span> <br>
	   Name: <input type = "text" id = "con2name" class="input">
	   Phone: <input type = "text" id = "con2tel" class="input">
	   Relationship to child : <input type = "text" id = "con2relate" class="input">
	   <br><br>

	 <span style= 'color: blue'>  3rd Contact </span> <br>
	   Name: <input type = "text" id = "con3name" class="input">
	   Phone: <input type = "text" id = "con3tel" class="input">
	   Relationship to child : <input type = "text" id = "con3relate" class="input">
	   <br><br>

<!-- existing medical conditions -->
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 <div id = "conditions">
	   <h4><span style= 'color:red'>*</span> <span style = 'color: teal'> Existing Medical Conditions </span> </h4>
	   Does Your child have any of the following conditions? <br>
	   <span style= 'color: red'> Please Check all that Apply </span> <br>
	   <input type="checkbox" id="c1" name = "conditions"><label for="c1"> Diabetes </label><br>
	   <input type="checkbox" id="c2" name = "conditions"><label for="c2"> Hearing Impairment </label><br>
	   <input type="checkbox" id="c3" name = "conditions"><label for="c3"> Visual Impairment</label><br>
	   <input type="checkbox" id="c4" name = "conditions"><label for="c4"> Sickle Cell Disease </label><br>
	   <input type="checkbox" id="c5" name = "conditions"><label for="c5"> Asthma </label><br>
	   <input type="checkbox" id="c6" name = "conditions"><label for="c6"> Other </label> <input type= "text"> <br>
	   <input type="checkbox" id="c7" name = "conditions"><label for="c7"> No Pre-existing Medical conditions </label><br>
	 </div><br><br>

<!--medical history information -->
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 <div id = "history">
	   <h4> <span style= 'color:red'>*</span> <span style = 'color: teal'> Medical History </span> </h4>
	   Does your child have history with any of the following? <br>
	   <span style= 'color: red'> Please Check all that Apply </span> <br><br>
	     <input type="checkbox" id="h1" name = "history"><label for="h1"> High fever </label><br>
	     <input type="checkbox" id="h2" name = "history"><label for="h2"> Emotional or behavioural problems </label><br>
	     <input type="checkbox" id="h3" name = "history"><label for="h3"> Nose bleeds </label><br>
	     <input type="checkbox" id="h4" name = "history"><label for="h4"> Fainting Spells </label><br>
	     <input type="checkbox" id="h5" name = "history"><label for="h5"> Hepatitis </label><br>
	     <input type="checkbox" id="h6" name = "history"><label for="h6"> Heart Problems </label><br>
	     <input type="checkbox" id="h7" name = "history"><label for="h7"> Migraines </label><br>
	     <input type="checkbox" id="h8" name = "history"><label for="h8"> Other </label> <input type= "text"> <br>
	     <input type="checkbox" id="h9" name = "history"><label for="h9"> None of the above </label><br>
		 </div><br><br>


<!--allergies information -->
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
		 <h4><span style = 'color: teal'> Allergies </span></h4>
		  <span style = 'color: red'>Please enter any allergies your child might have below.</span><br><br>
		<span style = 'color: blue'> 1. </span>
			Allergy Type (e.g. Food, Medication, Insect bites): <input type = "text" class="input"><br>
			Specify Allergy (eg. pineapple, dust): <input type = "text" class="input"><br>
			Severity (e.g. Mild, Moderate, Severe): <input type = "text" class="input"><br>
			Reaction (e.g. Hives, Coughing, difficulty breathing): <input type = "text" class="input"><br>
			<span style = 'color: blue'>Treatment: </span> <br>
			Name of Medication: <input type = "text" class="input"><br>
			Dose: <input type = "text" class="input"><br>
			How is medication to be taken: <textarea class="input"></textarea><br><br>


		<span style = 'color: blue'> 2. </span>
			Allergy Type (e.g. Food, Medication, Insect bites): <input type = "text" class="input"><br>
			Specify Allergy (eg. pineapple, dust): <input type = "text" class="input"><br>
			Severity (e.g. Mild, Moderate, Severe): <input type = "text" class="input"><br>
			Reaction (e.g. Hives, Coughing, difficulty breathing): <input type = "text" class="input"><br>
			<span style = 'color: blue'>Treatment: </span> <br>
			Name of Medication: <input type = "text" class="input"><br>
			Dose: <input type = "text" class="input"><br>
			How is medication to be taken: <textarea class="input"></textarea><br><br>


		<span style = 'color: blue'> 3. </span>
			Allergy Type (e.g. Food, Medication, Insect bites): <input type = "text" class="input"><br>
			Specify Allergy (eg. pineapple, dust): <input type = "text" class="input"><br>
			Severity (e.g. Mild, Moderate, Severe): <input type = "text" class="input"><br>
			Reaction (e.g. Hives, Coughing, difficulty breathing): <input type = "text" class="input"><br>
			<span style = 'color: blue'>Treatment: </span> <br>
			Name of Medication: <input type = "text" class="input"><br>
			Dose: <input type = "text" class="input"><br>
			How is medication to be taken: <textarea class="input"></textarea><br><br>

<!--emergency medical information -->
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
				<h3> <span style= 'color:red'>*</span> <span style = 'color: teal'> Emergency Medical Authorisation </span> </h3>
				 The school health office requires the following information.<br><br>

				Name of Student: <input type = "text" id = "studentname" class="input">
				Grade: <input type = "text" id = "studentgrade" class="input"><br>
				Name of Parent / Guardian: <input type = "text" id = "parentname" class="input">
				Phone number: <input type = "tel" id = "parentnumber" class="input"> <br><br>

				<span style = 'color:red'> PART 1 OR PART 2 must be completed.</span><br>
				<span style = 'color: blue'> Part1: To Grant Consent </span> <br>
				<input type = "checkbox" id = "part1">
				<span style = 'color:red'> I hereby give consent</span> to Asgardian Nursery School for: <br>
				1. The administration of emergency treatment and medication deemed necessary.<br>
				2. Transfer my child to a hospital reasonably accessible for advanced care.<br><br>

				<span style = 'color: blue'> Part 2: Refusal To Grant Consent </span> <br>
				<input type = "checkbox" id = "part2">
				<span style = 'color:red'> I DO NOT give consent</span> to Asgardian Nursery School
				for the emergency treatment of my child. <br> In the event of illness or injury
				I wish the school authorities to take the following action: <br>
				<textarea class="input"></textarea><br><br><br>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

<!---Insurance information -->
				<h3><span style = 'color:teal'><span style= 'color:red'>*</span> Insurance Information </span></h3>

					Does your child have insurance?
					<select id = "insurance">
						<option> Select...</option>
						<option> Yes</option>
						<option> No </option>
					</select><br>

					Name of Insurance Company: <input type = "text" id = "insurer" class="input"><br>
					Insurance type: <input type = "text" id = "insurancetype" class="input"><br>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<br>
<!-- submit button -->
 		 <input type = "button" value = "Submit" id = "next" onclick = "validatePage5()">
		</form>

<!-- previous page buton -->
		<form action = "admissionspage4.html">
		  <input type = "submit" value = "Previous Page" id = "submit">
		</form>
	</div>
<!-- end of body -->

<!--footer: from template -->
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

	<script type = "text/javascript" src = "../js/admissionspage5.js">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='../js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>