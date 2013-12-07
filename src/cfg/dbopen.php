<?php

//printf einkommentieren 

    $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die('server not found...');
    if (mysqli_connect_errno()) {
    //printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }
    
    /* return name of current default database */
    if ($result = $conn->query("SELECT DATABASE()")) {
        $row = $result->fetch_row();
        //printf("Default database is %s.\n", $row[0]);
        $result->close();
    }

    
    $conn->select_db($dbname);

    /* return name of current default database */
    if ($result = $conn->query("SELECT DATABASE()")) {
        $row = $result->fetch_row();
        //printf("Default database is %s.\n", $row[0]);
        $result->close();
    }

 ?>