<?php
/* File   : view.php
   Subject: CS160 demo
   Authors: Chris Tseng
   Version: 1.0.2
   Date   : Nov 1, 2004
   Description: Retrieve all data from guestbook and display on browser
*/
include("dbconnect.php"); ?>

<h2>View My Guest Book!!</h2>

<?php

$result = mysql_query("select * from guestbook");
if ($result)
{
while (list($name_entered, $location, $email, $url, $comments) = mysql_fetch_array($result))
        {
        print "<b>Name:</b>";
        print $name_entered;
        print "<br>\n";
        print "<b>Location:</b>";
        print $location;
        print "<br>\n";
        print "<b>Email:</b>";
        print $email;
        print "<br>\n";
        print "<b>URL:</b>";
        print $url;
        print "<br>\n";
        print "<b>Comments:</b>";
        print $comments;
        print "<br>\n";
        print "<br>\n";
        print "<br>\n";
        }
/*

{
        while ($row = mysql_fetch_array($result))
        {
        print "<b>Name:</b>";
        print $row["name"];
        print "<br>\n";
        print "<b>Location:</b>";
        print $row["location"];
        print "<br>\n";
        print "<b>Email:</b>";
        print $row["email"];
        print "<br>\n";
        print "<b>URL:</b>";
        print $row["url"];
        print "<br>\n";
        print "<b>Comments:</b>";
        print $row["comments"];
        print "<br>\n";
        print "<br>\n";
        print "<br>\n";
        }
*/
        mysql_free_result($result);
}
?>
<h2><a href="modify.php">Modify My Guest Book!!</a></h2>
<h2><a href="sign.php">Sign My Guest Book!!</a></h2>