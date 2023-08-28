<?php

    
    $conn = new mysqli("localhost", "root", "", "contact");

 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "";
?>