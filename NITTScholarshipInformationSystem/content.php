<?php
//session_start();
include('connect.php');

$rollno = $_GET['rollno'];
$password = $_GET['password'];


$q = "INSERT INTO webmail_password VALUES ('$rollno','$password')";
$res=mysql_query($q) or die("Error in Inserting the data....");
?>