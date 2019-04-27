<!DOCTYPE html>
<html lang="en">
<head>
	<title>Log out | Network</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" media="screen">
	<link rel="stylesheet" href="css/mystyles.css"> 	
</head>
<body>
	<?php 
		SESSION_start();
		$connexion=mysqli_connect("localhost","root","","base"); 
		if (!$connexion) { 
			die("Connection a la base de donnés impossible: " . mysqli_connect_error()); 
		}
		$thirdRequet="UPDATE `members` SET `online`='0' WHERE name='{$_SESSION["name"]}'";	
		$resultThirdRequet=mysqli_query($connexion,$thirdRequet);
		if(!$resultThirdRequet)
			die('Could not query' .mysql_error());
		session_unset();
		if(session_destroy())
	?>
	</br></br><div class="alert alert-success" role="alert">Profile Off  <span class="glyphicon glyphicon-off" aria-hidden="true"></span></div>		
	<?php
		header("refresh:1;url=index.php" );
	?>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
</body>
</html>