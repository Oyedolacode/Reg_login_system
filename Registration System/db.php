<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $conn = mysqli_connect('localhost', 'id16297708_1base', '+H%)IE(u@}e8{xHX' , 'id16297708_loginsystem','3306');
    // Check connection
    if (!$conn){
        echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
    }
?>