<?php 

$servername = "127.0.0.1"; 
$username = "root"; 
$password = "1qaz@wsx"; 
$database = "music_db"; 
$port = "3306"; 

// Create connection 
$conn= new mysqli('localhost','root','1qaz@wsx','music_db')or die("Could not connect to mysql".mysqli_error($con));

// Check connection 
// if ($conn->connect_error) { 
//     die("Connection failed: " . $conn->connect_error); 
// }else{ 
// die("Connected successfully"); 
// } 



// $conn= new mysqli('music.edu.tw','root','1qaz@wsx','music_db')or die("Could not connect to mysql".mysqli_error($con));
