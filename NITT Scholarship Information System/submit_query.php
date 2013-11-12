<?php
session_start();
include('connect.php');
$roll=$_SESSION['roll'];
$query = $_POST['query'];
mysql_query("INSERT INTO query(roll_no,query_msg) VALUES('$roll','$query')") or die("Error in inserting data");
echo "Successfully submitted Your Query";
$_SESSION['success_q']="Query has been sent successfully";
header("location:student_query.php");

?>
