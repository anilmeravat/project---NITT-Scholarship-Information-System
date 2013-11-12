<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<?php $status=0; ?>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login NITT Scholarship Information System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="National Institute of Technology Trichy Hospital" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="icon" type="image/png" href="images/logo.png" />
    </head>
    <body> <center> <img src="images/hd.jpg" width=1263px height=125px ></img></center>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1><span>Scholarship Information System</span></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-

utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login_status.php" method="POST" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p>
							<center><font color="red"> Sorry Wrong Password  <br></font></center>								
                                    <label for="username" class="uname" data-icon="" > Roll Number : </label>
                                    <input id="roll_no" name="rollno" required="required" type="text" placeholder="205112076"/>
                                </p> 
                                <p> 
                                    <label for="Password" class="uname" > Password : </label>
                                    <input id="password" name="pswd" required="required" type="password" placeholder="*******"/>
                                </p>
								
								Type :
                    <select category id="type">
                        
						<option value="student">Student</option>
                        <option value="dba">DBA</option>
                        </select>
								
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
								
								</p>
                            </form>
                        </div>

                        			
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
