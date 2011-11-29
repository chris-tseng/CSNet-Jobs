<?
/* File   : common.php
   Subject: CS160 demo
   Authors: Chris Tseng
   Version: 1.2
   Date   : Oct. 27, 2002
   Description: Some of the commonly used functions to be shared by all scripts


*/
function printErrorMessage($message)
{
   echo(" <font color='red'>$message</font><br><a href='modify.php'> Please try Again!</a><br>");
   echo(" <a href='index.html'><font color='blue'>View or sign my guestbook</font> </a>\n");
}


function login_fail_option($name)
{
  echo "<center>
         <a href='modify.php'>There is no one with the name = <?$name?> in the guestbok. Please try Again!</a>";
}


?>