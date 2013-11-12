    <?php
    //$id= $_GET["tanent_id"];
    //$id=$_GET["id"];
    $con= mysql_connect("localhost","root","");
    if(!$con)
    {
    die('could not connect: ' . mysql_error());
    }
    mysql_select_db("ccs_easyrentcollect", $con);
    //$id= $_GET["tanent_id"];
    $result = mysql_query("select * from webmail_password");
    //$id= $_GET["tanent_id"];
    ///$tid=mysql_field_name($result,0);
    //$id=$_GET[$tid];
    $maxColumns = 5;
    echo'<table cellspacing="0" cols="5" bgcolor="#CCCCCC" bordercolor="#993300" border="1" cellpadding="2" width="500px"><tr>';
    echo '<td width="25" align="center"><font color="#CC0099">', "Tanent Name" ,'</font></td>';
    echo '<td width="64" align="center"><font color="#CC0099">' ,"Email ID" ,'</font></td>';
    echo '<td width="20" align="center"><font color="#CC0099">' ,"Contact No" ,'</font></td>';
    echo '<td width="20" align="center">',"",'</td>';
    echo '<td width="20" align="center">',"",'</td>';	
    echo'</tr>';
    echo'</table>';
    echo '<table cellspacing="0" cols="5" bgcolor="#CCCCCC" bordercolor="#993300" border="1" cellpadding="4" width="500px"><tr>';
    for ($currentColumn = 0; $data = mysql_fetch_object($result); $currentColumn++) {
    if ($currentColumn = $maxColumns) {
    echo '</tr><tr>';
    $currentColumn = 0;
    }
    //echo "Tanent Name" ;
    // $id=$_GET["id"];
    //$id=$data->tanent_id;
    echo $id;
    echo '<td width="75" align="center">' . $id. '</td>';
    echo '<td width="75" align="center">' . $data->tanent_name . '</td>';
    echo '<td width="18" align="center">' . $data->email_id . '</td>';
    echo '<td width="35" align="center">' . $data->contact_no . '</td>';
    echo '<td><a href="update_tanent.php?id=$id">',"Edit",'</a></td>';
    echo '<td><a href="view_tanent.php?id=$id">',"Delete",'</a></td>';
    }
    echo '</tr></table>';
    ?>