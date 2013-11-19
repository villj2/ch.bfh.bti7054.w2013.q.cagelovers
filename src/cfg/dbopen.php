<?php
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('server not found...');
    mysql_select_db($dbname) or die('DB not found..');
?>
