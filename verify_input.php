<?
/* File   : verify_input.php
   Subject: CS160 demo
   Authors: Chris Tseng
   Version: 1.0.2
   Date   : Nov 19, 2002
   Description: check to see if the input contains any thing
*/
?>
<html>
<head><title>Input Verification Page</title>
</head>
<body bgcolor='white'>
<?php
include_once("common.php");
include_once("dbconnect.php");
//In case the register_globals is turned off, the form parameters can still be recovered as follows.
$to_be_recovered_name = $_POST['to_be_recovered_name'];
$status = TRUE;
if (empty($to_be_recovered_name))
{
  printErrorMessage("You have not entered the guest name");
  $status = FALSE;
}
else
include ("recoverguest.php");
?>
<!-- PHP codes ends here -->

</body>
</html>