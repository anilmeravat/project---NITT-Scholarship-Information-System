<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<?php

session_start();

?>

    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>NITT Scholarship Information System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="National Institute of Technology Trichy Hospital" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <!--link rel="shortcut icon" href="../favicon.ico"--> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="icon" type="image/png" href="images/logo.png" />
    </head>
	
	
     <center> <img src="images/hd.jpg" width=100% height=10% ></img></center>
	<center>
	</center>
	<body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top" >
                <center>
	<h2 style="background-color: #CCCCCC;font:15px/21px cursive;">
						<a href="logout.php" style ="text-decoration : none;"><b><i>Logout</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="dba_login.php" style = "text-decoration : none;"><b><i>Queries</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="suggestions.php" style = "text-decoration : none;"><b><i>Suggestions</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="update_home.php" style = "text-decoration : none;"><b><i>Update Home Info</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="msg_compose.php" style = "text-decoration : none;"><b><i>Send Message</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
			  </h2>
				
	
	
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1><span>Scholarship Information System</span></h1>
            </header>
				<table border="5" width="70%" height="70px" align="center" bordercolordark="#000000" style="color:#000000; content:attr(x); font-size:15px;" >
				<tr>
					<th align="center" style="color:#CC0033; border-color:#000000">&nbsp; Sender &nbsp; </th><th align="center" style="color:#CC0033; border-color:#000000">&nbsp; Query &nbsp;</th><th align="center" style="color:#CC0033; border-color:#000000">&nbsp; Date & Time &nbsp;</th></tr>
<?php

include 'connect.php';
$roll_no=$_SESSION['roll'];
$res=mysql_query("select * from query");

while($row=mysql_fetch_array($res))
{

	echo '<tr><td>&nbsp;'.$row['roll_no'].'&nbsp;</td><td ><textarea style="width:90%;height:17px;">&nbsp;'.$row['query_msg'].'</textarea>&nbsp;</td><td>&nbsp;'.$row['time_date'].'&nbsp;</td></tr>';

}


?>



    </body>
	
</html>