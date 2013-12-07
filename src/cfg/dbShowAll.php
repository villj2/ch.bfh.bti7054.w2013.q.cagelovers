<?php
include("$root/cagelovers/src/cfg/dbconfig.php");
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


$result = $mysqli->query("SHOW TABLES");
while ( $row = $result->fetch_row() ){
    $table = $row[0];
    echo '        <h3>',$table,'</h3>';
    $result1 = $mysqli->query("SELECT * FROM $table");
    if($result1) {
        echo '<table cellpadding="3" cellspacing="3" class="db-table">';
        $column = $mysqli->query("SHOW COLUMNS FROM $table");
        echo '<tr>';
        while($row3 = $column->fetch_row() ) {
                echo '        <th>'.$row3[0].'</th>';
                }
        echo '</tr>';
        while($row2 = $result1->fetch_row() ) {
            echo '<tr>';
            foreach($row2 as $key=>$value) {
                echo '        <td>',$value,'</td>';
                }
            echo '</tr>';
            }
        echo '</table><br />';
        }
    }
$mysqli->close();
?>