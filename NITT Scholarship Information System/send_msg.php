<?php
 session_start();
include('connect.php');
$send_to = $_POST['rollno'];
$subject = $_POST['subject'];
$message=$_POST['message'];
$roll=$_SESSION['roll'];
$result = mysql_query("SELECT * FROM webmail_password where roll_no='$roll'") or die("Error in Retriving the data....");
$sender_name=mysql_result($result,0,'name');
echo $sender_name;
echo $send_to;
echo $subject;
echo $message;
echo $roll;
 $check =mysql_query("INSERT INTO  student_inbox (reciever, sender_name, sender_id, subject, massage)VALUES('$send_to', '$sender_name', '$roll', '$subject', '$message')") 
 or die("Error in inserting data");
 
$_SESSION['sent']="Message Successfully Sent";

header("location:msg_compose.php");
?>
