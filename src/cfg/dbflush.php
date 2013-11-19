


<?php 
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    $_SESSION['navipoint'] = 'other';
    include ("$root/cagelovers/templates/header.php");
    
    include("$root/cagelovers/src/cfg/dbconfig.php");
    
    include("$root/cagelovers/src/cfg/dbopen.php");

    
    
    $result = mysql_query('SHOW TABLES');
 
    while ($row = mysql_fetch_array($result, MYSQL_NUM))
    {   
        $res2 = mysql_query("TRUNCATE TABLE `$row[0]`");
    }
    
    include("$root/cagelovers/src/cfg/dbclose.php");

    
    //redirect

?>

<?php include("$root/cagelovers/templates/footer.php") ?>