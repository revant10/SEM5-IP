<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['uname']);
      $mypassword = md5(mysqli_real_escape_string($db,$_POST['psw'])); 
      
      $sql = "SELECT uid FROM users WHERE uname = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: magzine.php");
      }
      else
      {	
      	 	echo "<script type='text/javascript'>alert('Incorrect Username or Password !!!!')</script>";
      	
      }
   }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="login.css">
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
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 800px) {
      .modals {
         display: block;
         float: none;
         width: 100%;
      }
      .cancelbtn {
        float: center;
        width: 100%;
      }
    }
    @media screen and (max-width: 800px) {
        .modals .content {   
          width: 100%;
          padding: 0;
          align-content: center;
        }
        .cancelbtn {
          width: 100%;
          float: center;
      }
      }

      /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
      @media screen and (max-width: 800px) {
        .container input{
          float: none;
          width: 100%;
          align-content: center;
        }
        button {
         width: 100%;
         float: center;
        }
        .modals, .modals-content{
          width: 100%;
          float: none;
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
    </style>

    <script type="text/javascript">
      function validate_form ( )
      { 
        valid = true;       
        
          if ( document.login.uname.value.length != 9 )     
          {              
            alert( "Please enter valid Username." );              
            valid = false;       
          } 
        return valid;
      }

      function abc()
      {
        document.getElementById(#msg).style.display=block;
      }
    </script>

  </head>
  <body onload="document.getElementById('id01').style.display='block'" style="width:auto;">
    <div id="id01" class="modals">
      <form class="modals-content animate" name="login" method="POST" action="">
      <center>
        <div class="container" >
          <label for="uname"><b>Username</b></label>
            <br><input type="text" placeholder="Enter Username" name="uname" required>
          <br>
          <label for="psw"><b>Password</b></label>
            <br><input type="password" placeholder="Enter Password" name="psw" required>
          <br>
          <label name="m"  id="msg" style="display: none; color: red; ">
            Incorrect User Name or Password !!!!
          </label>
        </div>
        <div class="container" style=" width:50%; padding: 0px;">
          <button type="submit" onclick="validate_form()" style="width: 100%">Login</button>
          <br>
          <a href="signup.php" target="_parent"><button type="button" onclick="" class="">Sign Up</button></a>
          <a href="index.php" target="_parent"><button type="button" onclick="" class="cancelbtn">Cancel</button></a>
        </div>
      </center>
      
      </form>
    </div>
    <script type="text/javascript">
      function abc()
      {
        document.getElementById(#msg).style.display=block;
      }
    </script>
  </body>
</html>