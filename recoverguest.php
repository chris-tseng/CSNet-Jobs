<?php
/* File   : recoverguest.php
   Subject: CS160 demo
   Authors: Chris Tseng
   Version: 1.0.2
   Date   : Nov 1, 2004
   Description: Retrieve the data from the database matching the name of the one to be modified
*/
include("dbconnect.php"); ?>

<h2>You wish to modify the information on
<?print  "name: $to_be_recovered_name"?>
</h2>

<?php

$result = mysql_query("select * from guestbook where name ='$to_be_recovered_name'");
if ($result)
{
list($name_entered, $location, $email, $url, $comments) = mysql_fetch_array($result);
     if ($name_entered !=null)
     {
echo "
<form method=post action='updateinfo.php'>
<b>Name:</b>
<input type=text size=40 name=modifyname value='$name_entered'>

<br>
<b>Location:</b>
<input type=text size=40 name=modifylocation value='$location'>
<br>
<b>Email:</b>
<input type=text size=40 name=modifyemail value='$email'>
<br>
<b>Home Page URL:</b>
<input type=text size=40 name=modifyurl value='$url'>
<br>
<b>Comments:</b>
<textarea name=modifycomments cols=40 rows=4 wrap=virtual >$comments</textarea>
<br>
<input type=hidden size=40 name='name_entered' value='$name_entered''>
<input type=submit name=submit value='Modify accordingly now!'>
<input type=reset name=reset value='Start Over'>

</form>";
 mysql_free_result($result);
     }  // end of inner if

 else
{
print "<h2>No matching name in the guest book found!</h2>";
 mysql_free_result($result);
}
}//   end of outer if
?>
 <input type='button' value='Go back'
                      onclick='self.history.back()' />
<h2><a href="modify.php">Modify My Guest Book!!</a></h2>
<h2><a href="sign.php">Sign My Guest Book!!</a></h2>