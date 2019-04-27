<!DOCTYPE html>
<html Lang="en">
<head>
	<title>Network | Messages</title>
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
          <a class="blog-nav-item" href="home.php">Home</a>
          <a class="blog-nav-item active" href="messages.php">Messages</a>
          <a class="blog-nav-item" href="download.php">Download</a>
          <a class="blog-nav-item" href="profile.php">Profile</a>
          <a class="blog-nav-item" href="logout.php">Log out</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1><?php echo $_SESSION["name"];?></h1>       
      </div>
      <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>        
                  <th>Source</th>
                  <th>Time</th>
                  <th>Message</th>
                </tr>
              </thead>
              <tbody>
              <?php   
                  $connexion=mysqli_connect("localhost","root","","base");
                  if (!$connexion) { 
                    die("Connection a la base de donnés impossible: " . mysqli_connect_error()); 
                  }
                  $thirdRequet="SELECT * FROM `messages` ORDER BY time DESC LIMIT 8";
                  $resultThirdRequet=mysqli_query($connexion,$thirdRequet);                  
                  while($rowMessage=mysqli_fetch_array($resultThirdRequet)){                   
              ?>
                <tr>
                  <td><?php echo $rowMessage['name']; ?></td>
                  <td><?php echo $rowMessage['time']; ?></td>
                  <td><font color="blue"><?php echo $rowMessage['message']; ?></font></td>
                </tr>
              <?php } ?>  
              </tbody>
            </table>
          </div>          



          <form method="POST" action="messages.php">  
             <input type="text" class="form-control" name="message" placeholder="Write your message here">
             <button class="btn btn-success btn-md btn-inline" type="submit" value="send">send</button>
          </form>
          <?php
              if(isset($_POST['message']) && strlen(trim($_POST['message']))>0){   
                $date=date("Y-m-d H:i:s");
                $secondRequet="INSERT INTO `messages`(`name`, `message`, `time`) VALUES ('{$_SESSION["name"]}','{$_POST["message"]}','$date')";
                header("refresh:0;url=messages.php");
                $resultSecondRequet=mysqli_query($connexion,$secondRequet);
                if(!$resultSecondRequet) die('Could not query :' .mysql_error());
              }
          ?>            

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <div class="list-group">
              <a href="#" class="list-group-item active">Friends online</a>            
            <?php 
                $requet="SELECT `name` FROM `members` WHERE online='1' ";
                $resultRequet=mysqli_query($connexion,$requet);
                while($row=mysqli_fetch_array($resultRequet)){
                  if($row['name'] != $_SESSION['name']){
            ?>
              <a href="#" class="list-group-item"><?php echo $row['name']; ?></a>
            <?php  
                  } 
                }  
            ?>  
            </div>
          </div>
          <div class="sidebar-module">

          </div>
          <div class="sidebar-module">
            <h4>Else Where</h4>
            <ol class="list-unstyled">
              <li><a href="https://www.instegram.com">Instegram</a></li>
              <li><a href="https://www.twitter.com">Twitter</a></li>
              <li><a href="https://www.facebook.com/">Facebook</a></li>
            </ol>
          </div>
        </div><!-- End .blog-sidebar -->

      </div><!-- End .row -->

    </div><!-- End .container -->

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
