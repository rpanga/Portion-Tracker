<!DOCTYPE html>
				<html>
				<head>
					<title>Select Yera & Sem </title>
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
								<a class="navbar-brand" >PORTION TRACKER</a>
							</div>
						         <div>
								     <div class="collapse navbar-collapse" id="myNavbar">
									 <ul class="nav navbar-nav navbar-right">
										<li><a href="../atten.php">Logout</a></li>

									</ul>
							        </div>
						        </div>
						</div>
					</nav>
				<div cla ss="container-fluid" style="margin-top:50px; ">

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
				<br>
					
				

				<center>
					<div class="container-fluid" style="margin-top:81px; "> 
						<h2>Select Year & Sem </h2>
						<br>
						<div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    SECOND YEAR
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="#sss" >SEM 3</a>
  <br>
  <a class="dropdown-item" href="#">SEM 4</a>
  </div>
</div>
</t>

<div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    THIRD YEAR
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="./sem5  subject.php" >SEM 5</a>
  <br>
  <a class="dropdown-item" href="./sem6  subject.php">SEM 6</a>
  </div>
</div>
</t>
</t>
<br>
<br>
<br>

<div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    FINAL YEAR
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="#" >SEM 7</a>
  <br>
  <a class="dropdown-item" href="#">SEM 8</a>
  </div>
</div>


 
</div>
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

				
				<!-- Footer -->
				<nav id="footer" style="background-color: black; color: white; padding: 10px; margin-bottom: 0px">
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