<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>View Students</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="../css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="../js/ajax.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body onload="loadDoc()">


		<div class="container">
			<h2 id="stlist" align="center">courses</h2><br/>

			<div class="form-group">
				<div class="input-group">
					<?php
						require_once ($_SERVER['DOCUMENT_ROOT'].'/asgardschool/controller/staff_regController.php');
						listRegisteredCourses();
					?>
					<br /><br>
				<div id="result"></div>
				</div>
			</div>
		</div>
	


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		
		<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
		<script src="../js/plugins.js"></script>
		<script src="../js/main.js"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script>

function move(){

	window.location = 'childinfo.php';
}
		</script>

	</body>
	
	</html>
