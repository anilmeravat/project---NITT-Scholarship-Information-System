<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<?php 
   session_start();
   if(!isset($_SESSION['roll']))
   		header("location:login.php");

include('connect.php');

$rollno = $_SESSION['roll'];
$state =$_SESSION['state'];
$category=$_SESSION['category'];
$info=$_POST['info'];
$link=$_POST['link'];
$result = mysql_query("SELECT * FROM webmail_password where roll_no='$rollno'") or die("Error in Retriving the data....");
//$row = mysql_fetch_array($result);
$name= mysql_result($result,0,'name');
$res = mysql_query("SELECT * FROM home_page_info  where category='$category' and state='$state'");
			if(mysql_num_rows($res)==1)
				{
				   mysql_query("DELETE FROM home_page_info where category='$category' and state='$state'")  
				    or die ("Error in Updating Database .....");
				   mysql_query("INSERT INTO home_page_info (state, category, information, updatedby, link) VALUES ('$state', '$category', '$info', '$name', '$link')") 
					or die("Error in Updating Database .....");
				
				}
		    else
			    {
			     	mysql_query("INSERT INTO home_page_info (state, category, information, updatedby, link) VALUES ('$state', '$category', '$info', '$name', '$link')") 
					or die("Error in Updating Database .....");
				}
$_SESSION['done']="Successfully Updated ";
header("location:update_home.php");
?>
