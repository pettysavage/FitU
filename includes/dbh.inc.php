<!-- 
    This is the database configuration file. Can change the 
        information when needed.
 -->


 <?php

$dbServername = "localhost"; //name of the server using
$dbUsername = "root"; //username of the data base
$dbPassword = ""; //password to get into it
$dbName = "testing"; //name of database we are using

// This is the connection to the database, use this in other files when needing
//  to connect easily to the databse
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName); // connection to the database

?>