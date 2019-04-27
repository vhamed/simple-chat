<!DOCTYPE html>
<html Lang="en">
<head>
	<title>Network | Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" media="screen">
	<link rel="stylesheet" href="css/blog.css">
	
	<?php 
		session_start(); 
		if(isset($_SESSION['name'])){
	?>
</head>
<body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="home.php">Home</a>
          <a class="blog-nav-item" href="messages.php">Messages</a>
          <a class="blog-nav-item" href="download.php">Download</a>
          <a class="blog-nav-item" href="profile.php">Profile</a>
          <a class="blog-nav-item" href="logout.php">Log out</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h2 class="blog-title">Network Site</h2>
        <p class="lead blog-description">All news.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Palestine</h2>
            <p class="blog-post-meta">September 1st, 2015 by <a href="#">Mark</a></p>

            <p>Khaled leaves jordan to doha to make an instance of hamass and he will meet more than 50 organisation's members .</p>
            <hr>
            <img src="img/khaled.jpg" class="img-circle">            
          </div><!-- End blog-post -->

          <div class="blog-post">
            <h2 class="blog-post-title">Sport</h2>
            <p class="blog-post-meta">September 10th, 2015 by <a href="#">John</a></p>

            <p>Ronaldo cristiano got the 4th best football player in his career and become the first Real Madrid's player who scored this number.</p>
            <hr>
            <img src="img/cristiano-01.jpg" class="img-circle">            
          </div><!-- End blog-post -->          

          <div class="blog-post">
            <h2 class="blog-post-title">Technologie</h2>
            <p class="blog-post-meta">September 20th, 2015 by <a href="#">Edward</a></p>

            <p>One of the most powerful processer in the world ,represented by Apple ,it had a capacity of 60 Go more ...</p>
            <hr>
            <img src="img/steve-jobs-01.jpg" class="img-circle">            
          </div><!-- End blog-post -->          
          
          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="messages.php">Next</a></li>
            </ul>
          </nav>

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
        <a href="#">Go back</a>
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
