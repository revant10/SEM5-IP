<?php
	include('session.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>MegaByte</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="magzine.css">
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
	
		<style>
			/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
			@media screen and (max-width: 800px) {
			  .rightcolumn, .leftcolumn,.dropdown{   
			    width: 100%;
			    padding: 0;
			    text-align: center;
			 }
			 .logout{
			 	width: 100%;
			 	float: right;
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
			  }
			  .logout{
			  	float: center;
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
			  	overflow: visible;
			    display: block;
			    width: 100%;
			    text-align: left;
			    position: relative;
			  }
			}
		</style>
		<script type='text/javascript'>
		    function show()
		    {
		        alert("This tab is under Development. Sorry for Inconvenience!!");
		    }
		</script>
	</head>
	<body>

		<div class="header">
			<h1>MegaByte</h1>
		</div>
		<br>
		<div class="topnav" id="myTopnav">
  			<a onclick="document.getElementById('h').style.display='block'" class="active" ><i class="fa fa-home"></i></a>
  			<div class="dropdown">
    			<div class="dropdownbtn">
    				Magzine
    			</div>
    			<div class="dropdown-content">
      				<a href='magzine/mb3.pdf' target='_self'>Megabyte 3.0</a>
      				<a href='magzine/mb2.pdf' target='_self'>Megabyte 2.0</a>
      				<a href='magzine/mb1.pdf' target='_self'>Megabyte 1.0</a>
    			</div>
  			</div> 
  			<a onclick='show()'>Paper Presentation</a>
  			<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  			<div class="logout">
          		<a href="logout.php" style="width:auto;" ><b>Logout</b></a>
        	</div>
		</div>
		
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
			    
				<!--<div class="card">
				   	<div class="site">
			    		<h3>Popular</h3>
			    		<center>
				   			<p>
				 				<a onclick="document.getElementById('id01').style.display='block'" style="padding: 10px 10px" alt="CC">Cloud Computing</a>
				   			</p>

				  			<p>
				   				<a onclick="document.getElementById('id02').style.display='block'" style="padding: 10px 10px" alt="AI">Artificial Intelligence</a>
				   			</p>
				      
				   			<p>
				   				<a onclick="document.getElementById('id03').style.display='block'" style="padding: 10px 10px" alt="ML">Machine Learning</a>	
				   			</p>
			  			</center>
			  		</div>
			    </div>-->
			    <div class="card">
			    	<b>Quick Access</b>
			      	<div class="site">
			      		<center>
				    		<p>
				    			<a href="http://moodle.aldel.org/" alt="moodle"><img src="img/moodle.png" alt='moodle' height=60 width=60></a>
				    		</p>
				    			
				    		<p>
				    			<a href="http://report.aldel.org/" alt="mis"><img src="img/aldel.png" alt='mis' height=60 width=60></a>
				    		</p>
				     
				    		<p>
				    			<a href="http://sjvault.aldel.org/" alt="sjvault"><img src="img/sjvault.png" alt='Sjvault' height=60 width=60></a>	
				    		</p>
			  			</center>
			      	</div>
			    </div>
			</div>

		  	<div class="rightcolumn">
		    	<div class="rc" id="h">
		    		
		    		<div class="card">
					    <h2>Megabyte 3.0</h2>
					    <h5>Issue, 2018</h5>
					    <div class="fakeimg">
					      	<a href='magzine/mb3.pdf' target='_self'><img src="img/mb3.png" alt='MEGABYTE 3.0' width="100%" height="auto"></a>
					    </div>
					    <p></p>
						<p></p>
					</div>
					<hr>

					<div class="card">
					    <h2>Megabyte 2.0</h2>
						<h5>Issue, 2017</h5>
				      	<div class="fakeimg">
						    <a href='magzine/mb2.pdf' target='_self'><img src="img/mb2.png" alt='MEGABYTE 2.0' width="100%" height='auto'></a>
						</div>
						    <p></p>
						    <p></p>
					</div>
					<hr>

					<div class="card">
						<h2>Megabyte 1.0</h2>
						<h5>Issue, 2016</h5>
						<div class="fakeimg">
						    <a href='magzine/mb1.pdf' target='_self'><img src="img/mb1.png" alt='MEGABYTE 1.0' width="100%" height="auto"></a>
						</div>
						<p></p>
						<p></p>
					</div>
				</div>

				<div class="m" id="m3">
					
					<embed src="magzine/mb3.pdf" width="100%" height="930"></embed>

				</div>

				<div class="m" id="m2">
					
					<embed src="magzine/mb2.pdf" width="100%" height="930"></embed>

				</div>

				<div class="m" id="m1">
					
					<embed src="magzine/mb1.pdf" width="100%" height="930"></embed>

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

		<!--<div id="id01" class="modals">
		  	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		  	<iframe src="https://en.wikipedia.org/wiki/Cloud_computing" width="100%" height="100%"></iframe>
		</div>

		<div id="id02" class="modals">
		  	<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
		  	<iframe src="https://en.wikipedia.org/wiki/Artificial_intelligence" width="100%" height="100%" scrolling="auto"></iframe>
		</div>

		<div id="id03" class="modals">
		  	<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
		  	<iframe src="https://en.wikipedia.org/wiki/Machine_learning" width="100%" height="100%" scrolling="auto"></iframe>
		</div>

		<script>
			// Get the modals
			var modals = document.getElementById('id01'),document.getElementById('id02'),document.getElementById('id03');

			// When the user clicks anywhere outside of the modals, close it
			window.onclick = function(event) {
			  if (event.target == modals) {
			    modals.style.display = "none";
			  }
			}
		</script>-->

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
				      				<img src="img/t1.jpg" alt="Ms. Jessica Dias">
				      				<div class="title">
				        			<h2>Ms. Jessica Dias</h2>
				        			<p class="title">Staff Co-ordinator</p>
				        		</div>
				    		</div>
				  		</div>
				  		<br>
				  		<div class="column">
				    		<div class="sheet">
				      			<img src="img/t2.jpg" alt="Ms. Joyce Lemos">
				      			<div class="container1">
				        			<h2>Ms. Joyce Lemos</h2>
				        			<p class="title">Staff Co-ordinator</p>
				        		</div>
				    		</div>
				  		</div>
				  		<br>
				  		<div class="column">
				    		<div class="sheet">
				      			<img src="img/t6.jpg" alt="Mr. Vasant Mestry">
				      			<div class="container1">
				        			<h2>Mr. Vasant Mestry</h2>
				        			<p class="title">Designer</p>
				        		</div>
				    		</div>
				  		</div>
				  		<br>
				  		<div class="column">
				    		<div class="sheet">
				      			<img src="img/t3.jpg" alt="Ms. Monika Patil">
				      			<div class="container1">
				        			<h2>Ms. Monika Patil</h2>
				        			<p class="title">Designer</p>
				        		</div>
				    		</div>
				  		</div>
				  		<br>
				  		<div class="column">
				    		<div class="sheet">
				      			<img src="img/t4.jpg" alt="Ms. Simran Panchal">
				      			<div class="container1">
				        			<h2>Ms. Simran Panchal</h2>
				        			<p class="title">Editor</p>
				        		</div>
				    		</div>
				  		</div>
				  		<br>
				  		<div class="column">
				    		<div class="sheet">
				      			<img src="img/t5.jpg" alt="Revant Kansara">
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

		<script type="text/javascript">
			function myFun()
			{
				var x = document.getElementById("if1");
				x.setAttrsetAttribute("src","rcMag.html");
				document.body.appendChild(x); 
				alert(x);			
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
