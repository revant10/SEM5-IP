<?php
include('config.php');

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