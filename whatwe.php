<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "CityTaxi";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

  $sql="SELECT * FROM contact";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
            // output data of each row
           

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>CITY TAXI</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		  <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script type="text/javascript" src="js/jquery.lightbox.js"></script>
				    <link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
				  	<script type="text/javascript">
				    $(function() {
				        $('.gallery-grid a').lightBox();
				    });
				    </script>
	</head>
	<body bgcolor="black">
		<!---strat-wrap----->
		
			<!---strat-header----->
			<div class="header"  id="top">
				<div class="wrap">
					<!---start-logo---->
					<div class="logo">
						<a href="index.html"><img src="images/logo1.png" title="logo" /></a>
					</div>
					<!---End-logo---->
					<!---start-top-nav---->
					<div class="top-nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="bks.html">Booking Form</a></li>
							<li class="active"><a href="whatwe.html">What Customers Say!</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="login.html">Login</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
					<div class="clear"> </div>
					<!---End-top-nav---->
				</div>
			</div>
			<!---End-header----->
		 <!---start-contnet---->
		 <font color="yellow" size=7 face="Roman" style="solid"> <center>
		 <?php
	 while($row = $result->fetch_assoc()) {
               echo "Name: ".$row["Name"]."<br>";
               echo "Comment: ".$row["Feedback"]."<br><hr>";
            }
        }
        else{
            echo "query fail";
        }
	
	?></center></font>
		 	<div class="bottom-grids">
		 		<div class="wrap">
		 		<div class="social-links">
		 			<ul>
		 				
		 				<li><a href="https://plus.google.com/u/0/116128541967483190068/posts"><span>VISIT US ON GOOGLE+</span></a></li>
		 			
		 			</ul>
		 		</div>
		 		<div class="mobile-no">
		 			 <span>NO. :+91 123 456789</span>
		 		</div>
		 		
		 		<div class="copy-right">
		 			<p><span>Design by</span> <a href="https://plus.google.com/+dishankkaji_ironman/posts/p/pub"><span>DSK Group</span></a></p>
		 		</div>
		 		<div class="top-to-page">
						<a href="#top" class="scroll"> </a>
						<div class="clear"> </div>
					</div>
		 	</div>
		 	</div>
		 </div>
		 <!---End-contnet---->
		</div>
		<!---End-wrap----->
	</body>
</html>