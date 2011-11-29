<?php
/* File   : modify.php
   Subject: CS160 demo
   Authors: Chris Tseng
   Version: 1.0.2
   Date   : Nov 1, 2004
   Description: allow users to modify data entered in the guestbook
   Usage: Users enter the name that they signed on the guestbook for the system to recover the data
*/
include("dbconnect.php"); ?>

<h2>Modify my Guest Book!!!</h2>
Enter the name of the guest you wish to modify
<form method=post action="verify_input.php">

<b>Name:</b>
<input type=text size=40 name=to_be_recovered_name>
<br>
<input type=submit name=submit value="Recover that guest info!">
<input type=reset name=reset value="Start Over">

</form>
