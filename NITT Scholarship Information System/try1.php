<?php
if(!isset($_SESSION['ok'])) header("location:login.php");



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <title>table1</title>
 <script language="javascript" type="text/javascript">
 function check()
 {
 if(document.getElementById('name1').value=='')
 {
 alert("Please enter your name");
 document.getElementById('name1').focus();
 }
 else if(document.getElementById('age1').value=='')
 {
 alert("please enter your age");
 document.getElementById('age1').focus();
 }
 else if(document.getElementById('location1').value=='')
 {
 alert("please enter the location");
 document.getElementById('location1').focus();
 }
 else
 {
 document.form.submit();
 }
 }
 </script>
 </head>
 
<body>
 <form method="post" action="try.php" name="form" >
 <table width="100%" border="0">
 <tr>
 <td><label>Enter your name: </label>
 </td>
 <td><input type="text" name="name"  id="name1"; />
 </td>
 </tr>
 <tr>
 <td><label>Enter your age:</label>
 </td>
 <td><input type="text" name="age" id="age1"; />
 </td>
 </tr>
 <tr>
 <td><label>Enter the location:</label>
 </td>
 <td><input type="text" name="location" id="location1"; />
 </td>
 </tr>
 <tr>
 <td colspan="2"> <div align="center">
 <input type="button" value="Submit" onclick="check();" name="Submit" />
 
</div></td>
 </tr>
 </table>
 </form>
 </body>
 </html>