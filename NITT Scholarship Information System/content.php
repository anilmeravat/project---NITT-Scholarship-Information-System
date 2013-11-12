<?php
session_start();
include('connect.php');
$name = $_POST['name'];
$rollno = $_POST['rollno'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$category = $_POST['category'];
$state=$_POST['state'];
$check=mysql_query("SELECT * FROM webmail_password WHERE roll_no='$rollno' and password='$password'");
if(mysql_num_rows($check)==1)
	{
		$q = "INSERT INTO registration (name,roll_no,password,phone_no,email,category,state)VALUES ('$name','$rollno','$password','$phone','$email','$category','$state')";
		$res=mysql_query($q) or $_SESSION['err'] = ("Error in Inserting the data....". mysql_error()) ;
	}
else
{
   $_SESSION['err'] =  "Sorry Wrong Roll Number or Password";
   header("location:regis.php");
}
?>