<?php
session_start();
include('connect.php');
$roll=$_SESSION['roll'];
$suggestion = $_POST['suggestion'];
mysql_query("INSERT INTO suggestion(roll_no,sug_msg) VALUES('$roll','$suggestion')") or die("Error in inserting data");
echo "Successfully submitted Your Query";
$_SESSION['success_s']="Suggestion has been sent successfully";
header("location:student_suggestion.php");

?>
