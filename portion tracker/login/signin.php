			<?php
			session_start();
				
				
				include("../db/dbconfig.php");
				if(isset($_POST['Login']))
				{
					$username=$_POST['username'];
					$password=$_POST['password'];

					$query= "SELECT * FROM login WHERE username ='".$username."' AND password ='".$password."'";
					$iquery=mysqli_query($conn,$query);
					$c=mysqli_num_rows($iquery);
					if($c==1){
						$_SESSION['loginstatus']=1;
					 	
						header('Location:select sem and year.php');
					}
					else
					{
						?>
						<script type="text/javascript">
							alert("Username or password incorrect");
						</script>
						<?php
					}

				}


			?>




				<!DOCTYPE html>
				<html>
				<head>
					<title>Staff Login</title>
					<!-- Meta Encoding -->
					<meta charset="utf-8">
					<meta name="viewport" content="width=decice-width, initial sacle =1">
					<meta name="description" content="website description">
					<meta name="keyword" content="">

					<!-- Bootstrap CDN -->
					<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

				<!-- jQuery library -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

				<!-- Latest compiled JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<!-- CDN ended -->
				<!-- ICON -->
				<link rel="icon" type="image/png" href="img/logo.png">
				<!-- ICON END -->

				<style type="text/css">
				
				</style>
				</head>
				<body>
					<nav class="navbar navbar-inverse navbar-fixed-top">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
									<span class="icon-bar"></span>
								    <span class="icon-bar"></span>
								    <span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="../atten.php">PORTION TRACKER</a>
							</div>
						         <div>
								     <div class="collapse navbar-collapse" id="myNavbar">
									 <ul class="nav navbar-nav navbar-right">
										<li><a href="../atten.php">Home</a></li>
									</ul>
							        </div>
						        </div>
						</div>
					</nav>
				<div cla ss="container-fluid" style="margin-top:5%; ">
					
				<!-- smooth scroll code -->
				<script>
				$(document).ready(function(){
				  // Add scrollspy to <body>
				  $('body').scrollspy({target: ".navbar", offset: 50});   

				   // Add smooth scrolling on all links inside the navbar
				  $("#myNavbar a").on('click', function(event) {
				    // Make sure this.hash has a value before overriding default behavior
				    if (this.hash !== "") {
				      // Prevent default anchor click behavior
				      event.preventDefault();

				      // Store hash
				      var hash = this.hash;

				      // Using jQuery's animate() method to add smooth page scroll
				      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
				      $('html, body').animate({
				        scrollTop: $(hash).offset().top
				      }, 800 , function(){
				   
				        // Add hash (#) to URL when done scrolling (default click behavior)
				        window.location.hash = hash;
				      });
				    }  // End if
				  });
				});
				</script>
				<!-- smooth scroll code ends -->

				<center>
					<div class="container-fluid" style="margin-top:100px; "> 
						<h2>Staff Sign In </h2>
						<br>
						<form method="POST">


							<div class="row">
								<div class="col-sm-6 col-sm-offset-3 form-group">
									<input type="text" name="username" placeholder="username"  class="form-control" required="required">		
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6 col-sm-offset-3 form-group">
									<input type="password" name="password" placeholder="Enter your password" class="form-control" required="required">		
								</div>
							</div>


							<div class="row">
								<div class="col-sm-6 col-sm-offset-3 form-group">
									<input type="submit" name="Login" class="btn btn-primary form-control" value="LOGIN" c>
								</div>
							</div>

						</form>
					</div>
				</center>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				
				<!-- Footer -->
				<nav id="footer" style="background-color: black; color: white; padding: 10px;">
				<div class="container">
				    <div class="pull-left">
				    	<p> 2019. &copyAll Rights Reserved. Designed and coded by <a href="https://www.facebook.com/rahul.panga.336?ref=bookmarks" target="_blank">Rahul Panga & Rutuja Patil & Raj Lokhande </a> &nbsp </p>
				    </div>
				    <div class="pull-right">
				    	&copySRS
				    </div>	
				</div>	

				</nav>
		</body>
	</html>