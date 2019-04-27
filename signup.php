<!DOCTYPE html>
<html>

<head>
	<title>Log In | Network</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" media="screen">
	<link rel="stylesheet" href="css/mystyles.css">

</head>

<body>
	<!-- navbar -->
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

      </div>
    </nav>
    <!-- End Navbar  -->
	
	<!-- Sign up -->
	<div id="signupForm">	    
	    <h2 id="createAcount"><b>Create your acount</b></h2>		    	
	    <form class="form-horizontal" action="signup.php" method="POST">
	    <?php
	    	//-----------------insert Name
	    	$sideCase=0;	
			if ( isset($_POST["nameadded"]) ){
				$lengthNameAdded=strlen((string) $_POST['nameadded']);
				if($_POST['nameadded']=='' or $lengthNameAdded>15){
		
		?>
					<div class="form-group has-error">
					  <label class="control-label" for="inputError1">Name</label>
					  <input type="text" class="form-control" id="inputError1" name="nameadded">
					</div>													
						<?php
				}else{?>
					<div class="form-group has-success">
					  <label class="control-label" for="inputSuccess1">Name</label>
					  <input type="text" class="form-control" id="inputSuccess1" name="nameadded" value="<?php echo $_POST["nameadded"]?>">
					</div>				
				<?php
				$sideCase++;	
				}					
			}else {	?>
					<div class="form-group">
					  <label class="control-label" for="input">Name</label>
					  <input type="text" class="form-control" id="inputSuccess1" name="nameadded">
					</div>						
					<?php
					
			}
			
			//----------------insert Surname
			if ( isset($_POST["surname"]) ){
				$lengthSurname=strlen((string) $_POST['surname']);
				if($_POST['surname']=='' or $lengthSurname>20){
		
		?>
					<div class="form-group has-error">
					  <label class="control-label" for="inputError2">Surname</label>
					  <input type="text" class="form-control" id="inputError2" name="surname">
					</div>													
						<?php
				}else{?>
					<div class="form-group has-success">
					  <label class="control-label" for="inputSuccess2">Surname</label>
					  <input type="text" class="form-control" id="inputSuccess2" name="surname" value="<?php echo $_POST["surname"]?>">
					</div>				
				<?php
				$sideCase++;	
				}					
			}else {	?>
					<div class="form-group">
					  <label class="control-label" for="input">Surname</label>
					  <input type="text" class="form-control" id="inputSuccess2" name="surname">
					</div>						
					<?php			
			}

			//-----------------insert country 
			if ( isset($_POST["country"]) ){
				$lengthCountry=strlen((string) $_POST['country']);
				if($_POST['country']=='' or $lengthCountry>11){
		
		?>
					<div class="form-group has-error">
					  <label class="control-label" for="inputError3">Country</label>
					  <input type="text" class="form-control" id="inputError3" name="country">
					</div>													
						<?php
				}else{?>
					<div class="form-group has-success">
					  <label class="control-label" for="inputSuccess3">Country</label>
					  <input type="text" class="form-control" id="inputSuccess3" name="country" value="<?php echo $_POST["country"]?>">
					</div>				
				<?php
				$sideCase++;	
				}					
			}else {	?>
					<div class="form-group">
					  <label class="control-label" for="input">Country</label>
					  <input type="text" class="form-control" id="inputSuccess3" name="country">
					</div>						
					<?php			
			}
			
			//---------------insert email		
			if ( isset($_POST["email"]) ){
				$lengthEmail=strlen((string) $_POST['email']);
				if($_POST['email']=='' or $lengthEmail>30){
		
		?>
					<div class="form-group has-error">
					  <label class="control-label" for="inputError4">Email</label>
					  <input type="email" class="form-control" id="inputError4" name="email">
					</div>													
						<?php
				}else{?>
					<div class="form-group has-success">
					  <label class="control-label" for="inputSuccess4">Email</label>
					  <input type="email" class="form-control" id="inputSuccess4" name="email" value="<?php echo $_POST["email"]?>">
					</div>				
				<?php
					$sideCase++;	
				}					
			}else {	?>
					<div class="form-group">
					  <label class="control-label" for="input">Email</label>
					  <input type="email" class="form-control" id="inputSuccess4" name="email">
					</div>						
					<?php			
			}

			//--------------insert password 
			if ( isset($_POST["password"]) ){
				$lengthPassword=strlen((string) $_POST['password']);
				if($_POST['password']=='' or $lengthPassword>20){
		
		?>
					<div class="form-group has-error">
					  <label class="control-label" for="inputError5">Password</label>
					  <input type="password" class="form-control" id="inputError5" name="password">
					</div>													
						<?php
				}else{?>
					<div class="form-group has-success">
					  <label class="control-label" for="inputSuccess5">Password</label>
					  <input type="password" class="form-control" id="inputSuccess5" name="password" value="<?php echo $_POST["password"]?>">
					</div>				
				<?php
					$sideCase++;						
				}					
			}else {	?>
					<div class="form-group">
					  <label class="control-label" for="input">Password</label>
					  <input type="password" class="form-control" id="inputSuccess5" name="password">
					</div>						
					<?php			
			}
		?>
	    <button class="btn btn-lg btn-success btn-block" type="submit" value="signup">Sign Up</button> 
	    </form>		       	
	</div>
		<?php
			if($sideCase == 5) {
				$connexion=mysqli_connect("localhost","root","","base"); 
				if (!$connexion) { 
					die("Connection a la base de donnés impossible: " . mysqli_connect_error()); 
				}				
				$reqAdd="INSERT INTO `members`(`name`, `surname`, `country`, `email`, `password`,`online`) 
				VALUES ('{$_POST['nameadded']}','{$_POST['surname']}','{$_POST['country']}','{$_POST['email']}','{$_POST['password']}','1') ";
				$resReq=mysqli_query($connexion,$reqAdd);
				mysqli_close($connexion);
				session_start();
				$_SESSION['name']=$_POST['nameadded'];
				header("refresh:0;url=home.php");
		?>
				</br><center><div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>Your acount is Up</div></center>				
		<?php			
			}
		?>		
			



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
</body>
</html>