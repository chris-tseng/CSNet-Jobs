<?php include("dbconnect.php"); ?>
<?php
//In case the register_globals is turned off, the form parameters can still be recovered as follows.
$name= $_POST['name'];
$location= $_POST['location'];
$email= $_POST['email'];
$url= $_POST['url'];
$comments= $_POST['comments'];
        $query = "insert into guestbook "
                ." (name,location,email,url,comments) values "
                //."('name', 'location', 'email', 'url', 'comments')"
                ."('$name', '$location', '$email', '$url', '$comments')"
        ;
        mysql_query($query);
?>
<h2>Thanks!!</h2>
<h2><a href="view.php">View My Guest Book!!!</a></h2>
