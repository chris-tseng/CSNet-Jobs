<?php
/* File   : dbconnect.php
   Subject: CS160 demo
   Authors: Chris Tseng
   Version: 1.0.2
   Date   : Nov 1, 2004
   Description: create database connection to the selected database
*/
        //$conn = @mysql_connect("localhost","your_id_here","yourpassword_here")
        //$conn = @mysql_connect("localhost", "root")
				$conn = @mysql_connect("localhost", "tseng", "pw4cs10db")
        or die("Could not connect to localhost");
//Create a database named cs160 and load guestbook.mysql into it before using this example
        mysql_select_db("cs160", $conn)
        or die("Could not select database");
?>