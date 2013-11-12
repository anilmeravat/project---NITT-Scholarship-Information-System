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
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-

utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="send_msg.php" method="POST"> 
                                <center><font color='red' size=8>Compose Message</font></center>
									<h3>
										<center><font color='red' size=5>
											<?php
												session_start();
												
												if(isset($_SESSION['wrong_roll']))
													{
														echo $_SESSION['wrong_roll'];
													    $_SESSION['wrong_roll']="";
													}
												if(isset($_SESSION['sent']))
													{
														echo $_SESSION['sent'];
													    $_SESSION['sent']="";
													}	
											?>
										</font></center>
									</h3>								
                                <p> 
                                    <label for="username" class="uname" data-icon="" >Send To(Roll Number) : </label>
                                    <input id="rollno" name="rollno" required="required" type="text" placeholder="Roll Number"/>
                                </p> 
                                <p> 
                                    <label for="subject" class="uname" > Subject : </label>
                                    <input id="subject" name="subject" required="required" type="text" placeholder="Write Subject"/>
									Message :
									<br>
                                    <textarea name="message" id="message" style="width:100%;height:100px ;background-color: #FFFFFF;color: #000000;font:8px/12px;" placeholder="Write Your Message Here...."></textarea>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Send Message" /> 
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