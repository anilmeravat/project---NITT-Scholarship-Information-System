<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
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
	<h2 style="background-color: #CCCCCC;font:20px/26px cursive;">
						<a href="index.php" style ="text-decoration : none;"><b><i>Home</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="login.php" style = "text-decoration : none;"><b><i>Login</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="regis.php" style = "text-decoration : none;"><b><i>Register</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="contectus.php" style = "text-decoration : none;"><b><i>ContectUs</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
					</h2>
				
	</center>
	
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1><span>Scholarship Information System</span></h1>
				
            </header>
			
			
          <textarea name="info" id="info" style="width:70%;height:70%;background-color: #FFFFFF;color:#53760D;font:12px/18px cursive;">
  <?php
		
		include'connect.php';
		if(isset($_POST['submit']))
		{
			$res = mysql_query("select * from home_page_info where state = ".'\''.$_POST['state'].'\''." and category =".'\''.$_POST['category'].'\'') or 	                                die(mysql_error());
		if(mysql_num_rows($res))
			{
				echo mysql_result($res,0,'information');
				echo "
				
				Updated By : ";echo mysql_result($res,0,'updatedby');
				echo "
				Updated On : ";echo mysql_result($res,0,'updatedon');
				$k =1;
			}
			else echo 'Error while fetching the data';
		}
		else
		{
		$res = mysql_query("select * from home_page_info where state = 'default' and category ='default'") or die(mysql_error());
		if(mysql_num_rows($res))
			{
				echo mysql_result($res,0,'information');
				echo "
				Updated By : ";echo mysql_result($res,0,'updatedby');
				echo "
				Updated On : ";echo mysql_result($res,0,'updatedon');
			}
			else echo 'Error while fetching the data';
		}
	?>
  </textarea><br><br>
  <center><font color="#FF0000" class="animate" size="+2" >
     <a href=
	          '<?php
                 if(isset($k) && $k==1)
                 echo mysql_result($res,0,'link');
              ?>'>
			  Download Your Application Form</a>
	 </center>
			
			<b><font color="#000000" face="Geneva, Arial, Helvetica, sans-serif" size="3">
			<form action="index.php" method="POST" name="form" >
            Select Your State and Category :<br>  Category :
			 <select  name="category" class="animate" id="category" category>
                        <option value="gen">General</option>
                        <option value="obc">OBC</option>
                        <option value="st">ST</option>
                        <option value="sc">SC</option>
                        <option value="minor">Minority</option>
    </select>
			  
                    State :
                    <select class="state" name="state" id="state">
					    
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
					
                      <input  name="submit" type="submit" class="animate" id="go" value="GO"/> 
					</p>
					</font></b><br>
                    
			
        </div>
    </body>
</html>