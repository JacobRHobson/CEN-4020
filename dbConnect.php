<?php
    $dbServerName = "localhost";     //because we’re using a local server
    $dbUsername = "root";            // default
    $dbPassword = "";                // default
    $dbName = "resistorcalcapp";
    $conn = mysqli_connect($dbServerName, $dbUsername,$dbPassword, $dbName);        // Connect Database
?>
