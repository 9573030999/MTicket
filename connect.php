<?php
$hostname  = 'database-1.c20hgj6ncxej.us-east-1.rds.amazonaws.com';
$username = 'mticket';
$password='mticket90';
$dbname = 'mticket';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>
