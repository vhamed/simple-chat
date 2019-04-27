<!DOCTYPE html>
<html>
<head>
	<title>Log In | Network</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" media="screen">
	<link rel="stylesheet" href="css/mystyles.css"> 	
</head>
    <?php
    	session_start();
    	if(!isset($_SESSION['name'])) {	 
    ?>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Network site</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="POST">
            <div class="form-group">
              <input type="text" placeholder="Username" class="form-control" name="name">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="pass">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>	
	

    <?php
	if(isset ($_POST["name"])){
			$connexion=mysqli_connect("localhost","root","","base"); 
			if (!$connexion) { 
				die("Connection a la base de donnés impossible: " . mysqli_connect_error()); 
			}
			$requet="SELECT * FROM `members` WHERE name='{$_POST["name"]}' and password='{$_POST["pass"]}' ";  
			$resultRequet=mysqli_query($connexion, $requet);	
			if (!$resultRequet)    
				die('Could not query:' . mysql_error());
			$tableau=mysqli_fetch_array($resultRequet, MYSQLI_ASSOC);
				
			if($tableau["name"]==$_POST["name"] && $tableau["password"]==$_POST["pass"] &&  mysqli_num_rows($resultRequet) > 0){
				$_SESSION["name"]=$_POST["name"];
				$secondRequet="UPDATE `members` SET `online`='1' WHERE name='{$_POST["name"]}'";
				$resultSecondRequet=mysqli_query($connexion,$secondRequet);
				if(!$resultSecondRequet)
					die('Could not query :' .mysql_error());

	?>
			<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  HELLO  <?php echo $_SESSION['name']; ?> !</div>

	<?php 
				header( "refresh:3;url=home.php" );
			}
			else {

	?>
			<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Wrong User or Password </div>
	<?php
				mysqli_close($connexion );
			}
	}		
	
	?>
    <div class="jumbotron">
      <div class="container">
        <h1>Network site</h1>
        <p>Hi & Welcome to Network web site, Sign Up and get all news hour by hour, conncet friends take photos videos and much more So take it easy and sign Up. <br>        	
      	<p>Enjoy with sharing your daily events.</p>
        <p><a class="btn btn-primary btn-lg" href="signup.php" role="button">Sign up</a></p>      
      </div>
    </div>

    <footer>
    	<center>&copy; BENSAAD Hamed 2015</center>
    </footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
</body>
</html>
    <?php
    	}else{ 
    		header("refresh:0;url=home.php");
    	}
    ?>