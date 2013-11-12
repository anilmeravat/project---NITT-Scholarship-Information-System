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
				<?php if(isset($_SESSION['done'])) 
				echo $_SESSION['done'];
					$_SESSION['done']="";?>
			

			<form action="update_next.php" method="POST" name="form" >
			<table height="30%" width="50%" border="5" align="center" bordercolordark="#000000" style="color:#000000; content:attr(x); font-size:15px;" >
<tr>
<td>Select State and Category to Update the Home page Information:<br> <br>
					 Category :
			       <select  name="category" class="animate" id="category" category>
                        <option value="default">Default Page</option>
						<option value="gen">General</option>
                        <option value="obc">OBC</option>
                        <option value="st">ST</option>
                        <option value="sc">SC</option>
                        <option value="minor">Minority</option>
                   </select>
			         
                    State :
                    <select class="state" name="state" id="state">
						<option value="default">Default Page</option>					    
                        <option value="Andaman Nicobar">Andaman Nicobar</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunanchal Pradesh">Arunanchal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chattisgarh">Chattisgarh</option>
                        <option value="Dadar & Nagar Haveli">Dadar & Nagar Haveli</option>
                        <option value="Daman & Diu">Daman & Diu</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Lakshwdeep">Lakshwdeep</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="New Delhi">New Delhi</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Pondicherry">Pondicherry</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
					<br>
					<br>
                      <input  name="submit" type="submit" class="animate" id="go" value="      Next      "/> 
					</p>
					<br>
            </div>        
			</form>
		
        </div>
    </body>
</html>