<?php
	include('config.php');
	
?>

<!DOCTYPE html>
<html>
	<head>

		<title>MegaByte</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="homepage.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
			
		<style>
			/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
			@media screen and (max-width: 800px) {
			  .rightcolumn, .leftcolumn {   
			    width: 100%;
			    padding: 0;
			    text-align: center;
			  }
			  .header{
			  	text-align: center;
			  }
			  .modal-content
			  {
			  	width: 100%;
			  }
			  .close
			  {
			  	top:0;
			  	right: 0;
			  }
			}

			/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
			@media screen and (max-width: 400px) {
			  .topnav a {
			    float: none;
			    width: 100%;
			    align-content: center;
			  }
			}
			/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
			@media (max-width: 600px) 
			{
			  * 
			  {
			    -webkit-flex-direction: column;
			    flex-direction: column;
			  }
			}	

			@media screen and (max-width: 800px) {
			  .topnav a:not(:first-child), .dropdown .dropbtn {
			    display: none;
			  }
			  .topnav a.icon {
			    float: left;
			    display: block;
			  }
			}

			@media screen and (max-width: 800px) {
			  .topnav.responsive {position: relative;}
			  .topnav.responsive .icon {
			    position: relative;
			    
			    top: 0;
			  }
			  
			  .topnav.responsive a {
			    float: none;
			    display: block;
			    text-align: left;
			    position: relative;
			  }
			  .topnav.responsive .dropdown {float: none;}
			  .topnav.responsive .dropdown-content {position: relative;}
			  .topnav.responsive .dropdown .dropbtn {
			  	
			    display: block;
			    width: 100%;
			    text-align: left;
			    position: relative;
			  }
			}

			/* Add Zoom Animation */
			.animate {
			  -webkit-animation: animatezoom 0.6s;
			  animation: animatezoom 0.6s
			}

			@-webkit-keyframes animatezoom {
			  from {-webkit-transform: scale(0)} 
			  to {-webkit-transform: scale(1)}
			}
			  
			@keyframes animatezoom {
			  from {transform: scale(0)} 
			  to {transform: scale(1)}
			}

			/* Change styles for span and cancel button on extra small screens */
			@media screen and (max-width: 300px) {
			  span.psw {
			     display: block;
			     float: none;
			  }
			  .cancelbtn {
			     width: 100%;
			  }
			  .modal{
			    width: 100%;
			  }
			}

			/* Change styles for cancel button and signup button on extra small screens */
			@media screen and (max-width: 300px) {
			  .cancelbtn, .signupbtn {
			     width: 100%;
			}

			@media screen and (max-width: 650px) {
			  .column {
			    width: 100%;
			    display: block;
			  }
			}		
		</style>

		<style>
			.rightcolumn img:hover,.leftcolumn img:hover {
			  animation: shake 0.5s;
			  animation-iteration-count: 2;
			}
			@keyframes shake {
			  	0% { transform: translate(1px, 1px) rotate(0deg); }
			  	10% { transform: translate(-1px, -2px) rotate(-1deg); }
				20% { transform: translate(-3px, 0px) rotate(1deg); }
		  		30% { transform: translate(3px, 2px) rotate(0deg); }
				40% { transform: translate(1px, -1px) rotate(1deg); }
		  		50% { transform: translate(-1px, 2px) rotate(-1deg); }
		  		60% { transform: translate(-3px, 1px) rotate(0deg); }
		  		70% { transform: translate(3px, 1px) rotate(-1deg); }
		  		80% { transform: translate(-1px, -1px) rotate(1deg); }
		  		90% { transform: translate(1px, 2px) rotate(0deg); }
		  		100% { transform: translate(1px, -2px) rotate(-1deg); }
			}
		</style>
	</head>

	<body>
		<div class="header">
			
				<!--<img src="img/bg1.png" width="100%" height="250">-->
				<h1>MegaByte</h1>
			
		</div>

		<br>

		<div class="topnav" id="myTopnav">
			<div class="link">
		  		<a href="index.php"><i class="fa fa-home"></i></a>
		  		<a onclick="alert('You need to Login First')">Magazine</a>
		  		<a onclick="alert('You need to Login First')">Paper Presentation</a>
		  	</div>
		  	<div class="login">
		  		<a href="login.php" ><b>Login</b></a>
		  		<a href="signup.php" ><b>Sign Up</b>
		  		</a>
		  	</div>

		  	<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		</div>

		<div id="id01" class="modal">
			<center>
				<iframe src="login.php" width="100%" height=410px></iframe>
			</center>
		</div>

		<div class="row">
		  
		    <div class="leftcolumn">
		    	
		    	<div class="card">
			      	<h2>About</h2>
			      	<div>
			      		<a onclick="document.getElementById('id03').style.display='block'">
			      			<img src="img/megabyte.png" height="100px" width="100%">
			      		</a>
			      	</div>
			      	<p>Initiative by,<br>Student Association, Department of IT </p>
			    </div>

			    <div class="card">
			      	<div class="site">
			      		<b>Quick Access</b>
			      		<center>
					      	<p style="background-color: black;">
					      		<a href="http://moodle.aldel.org/" alt="moodle" target="_blank"><img src="img/moodle.png" alt='moodle' height=60 width=60></a>
					      	</p>
					      	<p style="background-color: black;">
					      		<a href="http://report.aldel.org/student_page.php" alt="mis" target="_blank"><img src="img/aldel.png" alt='mis' height=60 width=60></a>
					      	</p>
					      	<p style="background-color: black;">
					      		<a href="http://sjvault.aldel.org/" alt="sjvault" target="_blank"><img src="img/sjvault.png" alt='Sjvault' height=60 width=60></a>	
					      	</p>
			  			</center>
			    	</div>
				</div>
		    </div>

		  	<div class="rightcolumn">
		  		<div class="rc">
		  			<div class="card">
						<h2>Megabyte 3.0</h2>
						<h5>Issue, 2018</h5>
						<div class="fakeimg" style="height:auto;">
					  		<img src="img/mb3.png" alt='MEGABYTE 3.0' width="100%" height="100%" onclick="alert('You need to Login First'),topFunction()">
						</div>
						<p></p>
						<p></p>
					</div>
					<hr>
					<div class="card">
						<h2>Megabyte 2.0</h2>
						<h5>Issue, 2017</h5>
						<div class="fakeimg" style="height:auto;">
						   	<img src="img/mb2.png" alt='MEGABYTE 2.0' width="100%" height="100%" onclick="alert('You need to Login First'),topFunction()">
						</div>
						<p></p>
						<p></p>
					</div>
					<hr>
					<div class="card">
					   	<h2>Megabyte 1.0</h2>
						<h5>Issue, 2016</h5>
						<div class="fakeimg" style="height:auto;">
						    <img src="img/mb1.png" alt='MEGABYTE 1.0' width="100%" height="100%" onclick="alert('You need to Login First'),topFunction()">
						</div>
						<p></p>
						<p></p>
					</div>
				</div>
			</div>
		</div>

		<div class="footer" style="color: white">
			
				<img src="img/sjcem.gif" width="60" height="auto">
				<i>Aldel Education Trust's</i>
				<br>
		  		<big style="position: relative;"><b>St. John College of Engineering & Management</b></big>
		  		<address >
		  			Manor Road,<br>Near Shakti Udyog Industrial Area,<br>Vevoor Village, Palghar,<br>Maharashtra 401404, INDIA
		  		</address>
		  		<div class="web">
		  			
		  		</div>
		  	
		</div>
		

		<div id="id03" class="modal">
		  	<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
		  	<div class="modal-content">
		  		<center>
		    		<div class="container1">
		      			<h1 style="font-family: Times New Roman">"Team Megabyte"</h1>
						<br><br>
						<div class="row">
				  			<div class="column">
				    			<div class="container1">
				      				<img src="img/t1.jpg" alt="Jane">
				      				<div class="title">
				        			<h2>Ms. Jessica Dias</h2>
				        			<p class="title">Staff Co-ordinator</p>
				        		</div>
				    		</div>
				  		</div>
				  		<br>
				  		<div class="column">
				    		<div class="sheet">
				      			<img src="img/t2.jpg" alt="Mike">
				      			<div class="container1">
				        			<h2>Ms. Joyce Lemos</h2>
				        			<p class="title">Staff Co-ordinator</p>
				        		</div>
				    		</div>
				  		</div>
				  		<br>
				  		<div class="column">
				    		<div class="sheet">
				      			<img src="img/t6.jpg" alt="John">
				      			<div class="container1">
				        			<h2>Mr. Vasant Mestry</h2>
				        			<p class="title">Designer</p>
				        		</div>
				    		</div>
				  		</div>
				  		<br>
				  		<div class="column">
				    		<div class="sheet">
				      			<img src="img/t3.jpg" alt="John">
				      			<div class="container1">
				        			<h2>Ms. Monika Patil</h2>
				        			<p class="title">Designer</p>
				        		</div>
				    		</div>
				  		</div>
				  		<br>
				  		<div class="column">
				    		<div class="sheet">
				      			<img src="img/t4.jpg" alt="John">
				      			<div class="container1">
				        			<h2>Ms. Simran Panchal</h2>
				        			<p class="title">Editor</p>
				        		</div>
				    		</div>
				  		</div>
				  		<br>
				  		<div class="column">
				    		<div class="sheet">
				      			<img src="img/t5.jpg" alt="John">
				      			<div class="container1">
				        			<h2>Revant Kansara</h2>
				        			<p class="title">Designer</p>
				        		</div>
				    		</div>
				  		</div>
					</div>
		        </center>
		  	</div>
		</div>

		<script>
			// Get the modals
			var modal = document.getElementById('id03');

			// When the user clicks anywhere outside of the modals, close it
			window.onclick = function(event) {
			  if (event.target == modal) {
			    modals.style.display = "none";
			  }
			}
		</script>
		<script>
			function myFunction() {
			  var x = document.getElementById("myTopnav");
			  if (x.className === "topnav") {
			    x.className += " responsive";
			  } else {
			    x.className = "topnav";
			  }
			}
		</script>
	</body>
</html>