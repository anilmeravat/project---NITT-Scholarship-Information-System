<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<?php

session_start();
include'connect.php';
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
	
	
     <center> <img src="images/hd.jpg" width=100% height=125px ></img></center>
	<center>
	</center>
	<body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top" >
                <center>
	<h2 style="background-color: #CCCCCC;font:20px/26px cursive;">
						<a href="logout.php" style ="text-decoration : none;"><b><i>Logout</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="student_login.php" style = "text-decoration : none;"><b><i>Inbox</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="student_query.php" style = "text-decoration : none;"><b><i>Query</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="student_suggession.php" style = "text-decoration : none;"><b><i>Suggession</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
			  </h2>
				
	
	
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1><span>Scholarship Information System</span></h1>
            </header>
			
			<textarea name="msg" id="msg" style="width:30%;height:30%;background-color:#D0F18F;color:#53760D;font:24px/30px cursive;">
  <?php
		
		//msg_id=
		$res = mysql_query("select * from student_inbox where msg_id='1000'") or die(mysql_error());
		if(mysql_num_rows($res))
			{
				echo mysql_result($res,0,'massage');
				
			}
		else echo 'Error while fetching the data';
		
	?>
  </textarea><br><br>
  
				
    </body>
	
</html>