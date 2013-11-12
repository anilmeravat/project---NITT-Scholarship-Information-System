<?php
$conn = mysql_connect("localhost","root","") or die("Unable to connect to MySQL" . mysql_error());
$n=mysql_select_db("nitt_sis")or die("Unable to SELECT DATABASE" . mysql_error());
?>