<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
</head>
<body>

<?php

	include 'connection.php';

?>
<?php
    $conn = mysqli_connect("localhost", "root","","project3");
        
    if($conn === false){
        die("ERROR: could not connect. " .  mysqli_connect_error());
    }

?>



