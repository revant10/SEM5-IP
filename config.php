<?php
   define('DB_SERVER', hostname);
   define('DB_USERNAME', username);
   define('DB_PASSWORD', password);
   define('DB_DATABASE', database_schema);
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>