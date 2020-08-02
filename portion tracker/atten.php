<?php
			session_start();
			?>
					<!DOCTYPE html>
					<html>
					<head>
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
					<!-- Font Awsome -->
					<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
					<!-- font awsome ended -->
					<!-- CDN ended -->
					<!-- ICON -->
					<link rel="icon" type="image/png" href="img/logo.png">
					<!-- ICON END -->

					<style type="text/css">
						body
						{
							position: relative;
						}
						.btn2
						{
							color: #fff;
							background: #742493;
							border-radius: 100px;
							text-transform: uppercase;
							/*border: 2px solid #000 ;*/
						}
						.jumbotron
						{
							background:  #742493;
							color: white;
							padding:15%;
						}
						.content
						{
							text-align: justify;
							font-size: 110%;
							line-height: 2;
						}
						.sizer
						{
							font-size: 350%;
							color: black;
						}
						.sizerh
						{
							font-size: 900%;
						}
						.ani
						{
							div {
					    width: 100px;
					    height: 100px;
					    background-color: red;
					    position: relative;
					    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
					    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
					    animation-name: example;
					    animation-duration: 4s;
					}

					/* Safari 4.0 - 8.0 */
					@-webkit-keyframes example {
					    0%   {background-color:red; left:0px; top:0px;}
					    25%  {background-color:yellow; left:200px; top:0px;}
					    50%  {background-color:blue; left:200px; top:200px;}
					    75%  {background-color:green; left:0px; top:200px;}
					    100% {background-color:red; left:0px; top:0px;}
					}
						}


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
									<a class="navbar-brand">PORTION TRACKER </a>
								</div>
							         <div>
									     <div class="collapse navbar-collapse" id="myNavbar">
										 <ul class="nav navbar-nav navbar-right">
											<li><a href="#home">Home</a></li>
								
										</ul>
								        </div>
							        </div>
							</div>
						</nav>
						
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

					<!-- section1 -->
						<div class="jumbotron text-center container-fluid" id="home" style="margin-bottom: 5px; margin-top:6px; height: 100vh">
							<div class="row">
								<center>
									<div class="col-sm-6 col-sm-offset-3">
										<i class="fab fa-xing sizerh"></i>
										
										<h3 style="padding: 4%;">Track Your Portion</h3>
										<a href="login/signin.php"><button class="btn btn-primary btn2">Staff Log In</button></a>
										<a href="view/select sem and year.php"><button class="btn btn-primary btn2">View completed portion</button></a>
									</div>
								</center>
							</div>
						</div>




						<!-- LOCATION (MAP) -->
						<div class="container" id="location">
							<div class="row">
								<div class="col-sm-3">
									<h2>Loaction</h2>
									<p>VIVA institute of engeneering,<br> virar,<br></p>
								</div>
								<div class="col-sm-9">
									<!-- MAP HERE -->
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8001.466329099348!2d72.8517644801227!3d19.475692597040496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a849feaaab93%3A0x5996b481c771b513!2sVIVA+Institute+of+Technology!5e1!3m2!1sen!2sin!4v1553417767908" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>		
								</div>
							</div>
						</div>
						<br><hr>

						<!-- section -->
						
					
							</div>
						</div>

					<!-- Footer -->
					<nav id="footer" style="background-color: black; color: white; padding: 10px;">
					<div class="container">
					    <div class="pull-left">
					    	<p> 2019. &copyAll Rights Reserved. Designed and coded by <a href="https://www.facebook.com/rahul.panga.336?ref=bookmarks"target="_blank">RAHUL PANGA & RUTUJA PARIL & RAJ LOKHANDE </a> &nbsp </p>
					    </div>
					    <div class="pull-right">
					    	&copySRS
					    </div>	
					</div>	

					</nav>
					</body>
					</html>