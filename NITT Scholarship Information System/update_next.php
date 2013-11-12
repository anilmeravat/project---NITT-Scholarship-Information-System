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
$state = $_POST['state'];
$category = $_POST['category'];

$_SESSION['state']=$state;
$_SESSION['category']=$category;
//$result = mysql_query("SELECT * FROM webmail_password where roll_no='$rollno'") or die("Error in Retriving the data....");
//$row = mysql_fetch_array($result);
//name=$row['name'];
$res = mysql_query("SELECT * FROM home_page_info  where category='$category' and state='$state'");

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
				
	</center>
	
                
            </div><!--/ Codrops top bar -->
            <header>
                <h1><span>Scholarship Information System</span></h1>
				
			

			
	<table height="1000%" width="100%" border="5" align="center" bordercolordark="#000000" style="color:#000000; content:attr(x); font-size:15px;" >
		 <tr>
			<td> Update Home Page Information for State :&nbsp;" <?php echo $state?>" &nbsp;and Category : &nbsp;"<?php echo $category?>" <br> <br>
					<form action="update_home_finale.php" method="POST" name="form1" >
					Home Page Information 
						<textarea name="info" id="info" style="width:90%;height:100%; min-height:400px;background-color: #CCCCCC;color:#53760D;font:12px/15px cursive;">
							<?php 
							  if(mysql_num_rows($res))
								{
									echo mysql_result($res,0,'information');
									$k =1;
								}
							  else echo 'No Information Available .....
							  Write new information';
							?></textarea><br>
					Change Link for Application Form 
						<textarea name="link" id="link" style="width:80%;height:12px;background-color: #FFFFFF;color: #000000;font:12px/15px cursive;"><?php 
							  if(mysql_num_rows($res))
								{
									echo mysql_result($res,0,'link');
									$k =1;
								}
							  else echo "Enter New Link Here";
							?></textarea>
					<br>
					<br>
                      <input  name="submit" type="submit" class="animate" id="go" value="      Update      "/> 
					</p>
					<br>
            </div>        
			</form>
		
        </div>
    </body>
</html>