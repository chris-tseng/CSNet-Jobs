<?php include("dbconnect.php"); ?>
<?php


        $query = "insert into guestbook "
                ." (name,location,email,url,comments) values "
                ."('$name1', '$location1', '$email1', '$url1', '$comments1')"
        ;
        mysql_query($query);
?>
<h2>Thanks!!</h2>
<h2><a href="view.php">View My Guest Book!!!</a></h2>

