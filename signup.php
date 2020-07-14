<?php
include('config.php');
//$ = mysqli_connect("103.118.16.34","kristalt_ip","Revant@123","kristalt_ip");


session_start();

  // REGISTER USER
  if (($_SERVER["REQUEST_METHOD"] == "POST")) 
  {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['pid']);
    $password_1 = mysqli_real_escape_string($db, $_POST['psw']);
    $password_2 = mysqli_real_escape_string($db, $_POST['pswr']);

    $sql = "SELECT uid FROM users WHERE uname = '$username'LIMIT 1";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
        
        // If result matched $myusername and $mypassword, table row must be 1 row
      
        if($count == 1) 
        {
          echo "<script type='text/javascript'>alert('This Username already exists !!!!')</script>";
          
        }
        else
        {
          // Finally, register user if there are no errors in the form
          $password = md5($password_1);//encrypt the password before saving in the database
          $query = "INSERT INTO `users` (`uname`, `passcode`) VALUES ('$username', '$password')";
          if ($db->query($query) === TRUE)
          {
            echo "New record created successfully";
            $_SESSION['login_user'] = $username;
            header('location: magzine.php');
          }
          else 
          {
            echo "<script type='text/javascript'>alert('Something went wrong !!!! Try again Later.')</script>";  
          }
        }   
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="signup.css">
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
          * {   
            width: 100%;
            padding: 0;
            align-content: center;
          }
        }

        /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {
          .signupbtn, .cancelbtn {
            float: none;
            width: 100%;
            align-content: center;
            text-align: center;
          }
          .container input {
            width: 100%;
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

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
          .cancelbtn, .signupbtn {
             width: 100%;
          }
        }
    </style>

    
  </head>
  <body>
    <div id="id02" class="modal">
      <form class="modal-content" method="POST" name="signup" action="">
        <div class="container"><center>
          <h1>Sign Up</h1>
          <p>Please fill in this form to continue.</p>
          <hr>
          <label for="email"><b>PID</b></label>
          <br>
            <input type="text" placeholder="EUXXXXXXX" name="pid"  style='color: black' required>
          <br>
          <label for="psw"><b>Password</b></label>
          <br> 
            <input type="password" placeholder="Enter Password" name="psw" style='color: black' required>
          <br>
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <br>
            <input type="password" placeholder="Repeat Password" name="pswr" style='color: black' required>
          <br>
          <label>
          
          </label>
          <p>By creating an account you agree to our <b>Terms & Privacy</b>.</p>
          <div class="">
            <p><button type="submit" class="signupbtn" onclick="validate()"><b>Sign Up</b></button></p>
            <p><a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a></p>
          </div></center>
        </div>
      </form>
    </div>
    <script type="text/javascript">  
      function validate( )
      { 
        valid = true;       
        
          if ( document.signup.pid.value.length != 9 )     
          {              
            alert ( "Please enter valid PID." );              
            valid = false;       
          }
          if ( document.signup.psw.value != document.signup.pswr.value )     
          {              
            alert ( "Check Your Password." );
            document.signup.pswr.placeholder="Please enter same password as above."              
            valid = false;       
          }
        return valid;
      }
    </script>
  </body>
</html>