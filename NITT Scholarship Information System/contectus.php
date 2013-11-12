<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title> Contect Us NITT Scholarship Information System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="NIT Trichy Scholarship Information System" />
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
	<h2 style="background-color: #CCCCCC;font:20px/26px cursive;">
						<a href="index.php" style ="text-decoration : none;"><b><i>Home</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="login.php" style = "text-decoration : none;"><b><i>Log in</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="regis.php" style = "text-decoration : none;"><b><i>Register</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="contectus.php" style = "text-decoration : none;"><b><i>Contect Us</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
			  </h2>
				
	
	
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1><span>Scholarship Information System</span></h1>
            </header>
				<table height="30%" width="50%" border="5" align="center" bordercolordark="#000000" style="color:#000000; content:attr(x); font-size:15px;" >
<tr>
<th align="center" style="color:#CC0033; border-color:#000000">&nbsp;Name&nbsp; </th> <th align="center" style="color:#CC0033; border-color:#000000">&nbsp;Department&nbsp;</th><th align="center" style="color:#CC0033; border-color:#000000">&nbsp;Designation &nbsp;</th><th align="center" style="color:#CC0033; border-color:#000000">&nbsp; Contact Number &nbsp;</th><th align="center" style="color:#CC0033; border-color:#000000">&nbsp; Email &nbsp;</th></tr>
<?php
include 'connect.php';
$res=mysql_query("select * from contect");
while($row=mysql_fetch_array($res))
{
	echo '<tr><td>&nbsp;'.$row['name'].'&nbsp;</td><td>&nbsp;'.$row['department'].'&nbsp;</td><td>&nbsp;'.$row['designation'].'&nbsp;</td><td>&nbsp;'.$row['phone'].'&nbsp;</td><td>&nbsp;'.$row['email'].'&nbsp;</td></tr>';
}


?>


</tr>
<table>

        </div>
    </body>
	
	
<body>


</body>
</html>