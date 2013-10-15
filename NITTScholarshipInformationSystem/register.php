<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
		<title>Register NITT Scholarship Information System</title>
        <!--title>NIT Trichy Scholarship Information System</title-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="NIT Trichy Scholarship Information System" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="icon" type="image/png" href="images/logo.png" />
		
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
	     <center> <img src="images/hd.jpg" width=1263px height=125px ></img></center>
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
                             
                              
                               
		<form action="content.php" method="GET" >
            <h1>Registration</h1>
            <fieldset class="row3">
                <!--<legend>Personal Details</legend> -->
                <p>
                    <label>Name :
                    </label>
                    <input type="text" class="long" name="name" placeholder="Anil Meravat"/>
                </p>
                <p>
                    <label>Roll Number :
                    </label>
                    <input type="text" class="long" name="rollno"placeholder="205112076"/>
                </p>
                    <p>
                    <label>Webmail Password :
                    </label>
                    <input type="password" class="long" name="password"/>
                </p>          


            <p>
                    <label>Mobile Number :
                    </label>
                    <input type="text" maxlength="10" name="phone" placeholder="8144428429"/>
                </p>
                
                <p>
                    <label>Email ID :
                    </label>
                    <input type="text" class="long" name="email" placeholder="anilmeravat@gmail.com"/>
                </p>
      
            </fieldset>
		
            <fieldset class="row3">
		
			   
			        Category :
                    <select Category>
                        <option value="gen">General</option>
                        <option value="obc">OBC</option>
                        <option value="st">ST</option>
                        <option value="sc">SC</option>
                        <option value="minor">Minority</option>
                    </select>
			   
			  
				<p>
                    <br><label>State : 
                    </label>
                    <select class="state">
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
				</p>
					
					
                                <p class="login button"> 
                                    <input type="submit" value="Register" name="submit"/> 
								</p>
                                <p class="change_link">
								
								
                            </form>
                        </div>

                        			
                            
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>