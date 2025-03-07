<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "baza";


$connection = new mysqli($server,$username,$password="", $database);
if($connection->connect_error){
    die("connection failed " . $conn->connect_error);
    
} echo "connected succesfully";
?>