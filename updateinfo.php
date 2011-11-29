<?php
/* File   : updateinfo.php
   Subject: CS160 demo
   Authors: Chris Tseng
   Version: 1.0.4
   Date   : Nov 1, 2004
   Description: Modify the information collected from modify.php
*/
//In case the register_globals is turned off, the form parameters can still be recovered as follows.
$modifyname = $_POST['modifyname'];
$modifylocation = $_POST['modifylocation'];
$modifyemail = $_POST['modifyemail'];
$modifyurl = $_POST['modifyurl'];
$modifycomments = $_POST['modifycomments'];
$name_entered = $_POST['name_entered'];
include("dbconnect.php");
        $query = "update guestbook "
                ." set  name ='$modifyname',location='$modifylocation',email='$modifyemail',"
                ."url='$modifyurl', comments='$modifycomments' "
                ."where name = '$name_entered'"
        ;
        mysql_query($query);
?>
<h2>Thanks!!</h2>
<h2><a href="view.php">View My Guest Book!!!</a></h2>
