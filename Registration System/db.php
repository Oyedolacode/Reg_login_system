<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $conn = mysqli_connect('localhost', 'hustle', 'test1234', 'loginsystem');
    // Check connection
    if (!$conn){
        echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
    }
?>