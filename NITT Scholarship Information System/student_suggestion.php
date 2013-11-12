<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<?php
include'connect.php';
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
						<a href="student_suggestion.php" style = "text-decoration : none;"><b><i>Suggestion</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
			  </h2>
				
	
	
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1><span>Scholarship Information System</span></h1></center>
            </header>
		<form action="submit_suggestion.php" method="POST" name="form" >
            
			<?php 
			   if(isset($_SESSION['success_s']))
			   {
				   echo $_SESSION['success_s'];
					$_SESSION['success_s']="";
				}
			?>          
                <!--<legend>Personal Details</legend> -->
                
                <br>    Name :
                    <!--input type="text" class="long" name="name" required="required" id="name"/-->
					<?php $roll=$_SESSION['roll']; 
					$res=mysql_query("select name from registration where roll_no=$roll"); 
					$row=mysql_fetch_array($res);
					echo $row['name'];
					?>
                   <br> Roll Number :
                    <!--input type="text" class="long" name="rollno" required="required" id="rollno" placeholder="205112076"/></textarea-->
                <?php echo $roll?>
				<br>
				<textarea style="width:70%;height:70%;font:24px/30px cursive;" type="text" class="long" name="suggestion" required="required" id="suggestion" placeholder="Write your Suggestion here..."/></textarea><br>
                    <input type="submit" value="submit"  name="submit"/>
                                
								
								
                            </form>





    </body>
	
	
<body>


</body>
</html>