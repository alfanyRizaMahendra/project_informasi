<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "project_loading_painting";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if($conn -> connect_error){
    die("Connection Failed: ".$conn->connect_error);
}

$mysqli - > close();
?>