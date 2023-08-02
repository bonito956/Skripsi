<?php
    //Koneksi Lokal
    $servername = "sql6.freemysqlhosting.net";
    $username = "sql6636993";
    $password = "gMINIfbPhM";
    $dbname = "sql6636993";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
?>