<?php
include "database.php";
session_start();
// if(!isset($_SESSION["AID"]))
// {
// 	echo <script>window.open('index.php?mes=Access Denied..','_self')</script>
// }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin Page</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
		<body>
			<?php include "navbar.php";?><br>
			<img src="https://karapiro.files.wordpress.com/2011/11/learning-at-karapiro-school-009.jpg" style="margin-left:90px;" class="sha">
			<div id="section">

				<?php include"sidebar.php";?><br>

				<div class="content">
					<h3 class="text"> Welcome <?php echo $_SESSION["ANAME"];?></h3><br><hr><br>
					<h3> School Information</h3><br>
					<img src="https://karapiro.files.wordpress.com/2011/11/learning-at-karapiro-school-009.jpg" class="imags">
					<p class="para">
						School Management System is a complete school management software designed to automate a school's diverse operation from classes, exam to school events calendar.
					
</p>
<p class="para">
	This school software has a powerful online community to bring parents, 
	teachers and students on a common interactive plateform. 
	It is a paperless office automation solution for today's modern schools. The School Management System provides
	the facility to carry out all day to day activities of the school.
</p>
</div>
</div>
</body>
</head>

</html>