<!DOCTYPE html>
<html Lang="en">
<head>
	<title>Network | Download</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" media="screen">
	<link rel="stylesheet" href="css/blog.css">
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->	
	<?php 
		session_start(); 
		if(isset($_SESSION['name'])){
	?>
</head>
<body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="home.php">Home</a>
          <a class="blog-nav-item" href="messages.php">Messages</a>
          <a class="blog-nav-item active" href="download.php">Download</a>
          <a class="blog-nav-item" href="profile.php">Profile</a>
          <a class="blog-nav-item" href="logout.php">Log out</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h2>Get Our Application</h2>        
      </div>
      <div class="row">
        <div class="col-sm-8 blog-main">
              <button id="downloadButton" type="button" class="btn btn-primary btn-lg">Download</button>
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About Us</h4>
            <p>Network site for users are helpeful to find friends and sharing all their pictures & videos & all information, No personal data .</p>
          </div>
          <div class="sidebar-module">
            <h4>Else Where</h4>
            <ol class="list-unstyled">
              <li><a href="https://www.instegram.com">Instegram</a></li>
              <li><a href="https://www.twitter.com">Twitter</a></li>
              <li><a href="https://www.facebook.com/">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>&copy; BENSAAD Hamed 2015</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


<script src="js/ie-modes.js"></script>      
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/myscript.js"></script> -->
</body>
</html>
<?php }else{ ?>
  <center><h1>Please ! Log in or Sign up to get this page</h1></center>
<?php 
  header("refresh:1;url=index.php");
  }
?>