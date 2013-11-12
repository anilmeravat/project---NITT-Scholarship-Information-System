<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
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
    <body> <center> <img src="images/hd.jpg" width=100% height=10% ></img></center>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
				<center>
					<h2 style="background-color: #CCCCCC;font:20px/26px cursive;">
						<a href="index.php" style ="text-decoration : none;"><b><i>Home</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="login.php" style = "text-decoration : none;"><b><i>Login</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="regis.php" style = "text-decoration : none;"><b><i>Register</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="contectus.php" style = "text-decoration : none;"><b><i>ContectUs</i></b></a>&nbsp;&nbsp;&nbsp;&nbsp;
					</h2>
				</center>
                
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
                            <form  action="login_status.php" method="POST"> 
                                <h1>Log in</h1>
									<h3>
										<center><font color='red' size=5>
											<?php
												session_start();
												
												if(isset($_SESSION['wrong_password']))
													{
														echo $_SESSION['wrong_password'];
														session_destroy();
													}
													if(isset($_SESSION['logout']))
													{
														echo $_SESSION['logout'];
														session_destroy();
													}
												if(isset($_SESSION['reg_req']))
													{
														echo $_SESSION['reg_req'];
														session_destroy();
													}
												if(isset($_SESSION['type']))
												{
												  echo $_SESSION['type'];
														session_destroy();
												}
											?>
										</font></center>
									</h3>								
                                <p> 
                                    <label for="username" class="uname" data-icon="" > Roll Number : </label>
                                    <input id="roll_no" name="rollno" required="required" type="text" placeholder="205112076"/>
                                </p> 
                                <p> 
                                    <label for="Password" class="uname" > Password : </label>
                                    <input id="password" name="pswd" required="required" type="password" placeholder="*******"/>
                                </p>
								
								Type :
                    <select category id="type" name="type">
                        
						<option value="student">Student</option>
                        <option value="DBA">DBA</option>
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