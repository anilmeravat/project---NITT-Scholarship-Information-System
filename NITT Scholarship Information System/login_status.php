<?php
session_start();
include('connect.php');

$rollno = $_POST['rollno'];
$password = $_POST['pswd'];
$type=$_POST['type'];

$result = mysql_query("SELECT roll_no FROM webmail_password where roll_no='$rollno'") or die("Error in Retriving the data....");

$result1 = mysql_query("SELECT * FROM webmail_password where roll_no='$rollno' and password='$password'") or die("Error in Retriving the data....");
//echo $cnt;
    if(mysql_num_rows($result)==1 and mysql_num_rows($result1)==0)
       {
	     $_SESSION['wrong_password'] =  "Incorrect Password";
          header("location:login.php");
		}
	else if(mysql_num_rows($result)==0)
	    {
		  //echo 'You Have not registered yet for scholarship...';
		  $_SESSION['reg_req'] =  "Registration Required ";
          header("location:login.php");

		}
	else
	    {
		  $row = mysql_fetch_array($result1);
		 if($row['type']=="student" and $type=="student")
		 {
		  $_SESSION['roll'] = $rollno;
		  header("location:student_login.php");
		  }
		  else if($row['type']=="dba" and $type=="DBA")
		  {
		   $_SESSION['roll'] = $rollno;
		   header("location:dba_login.php");
		  }
		  else
		  {
		     $_SESSION['type'] = 'You are not '.$type;
		     header("location:login.php");
		  }
		}
?>