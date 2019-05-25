<?php
    // getDBInfo.php
$dbname = "p8rally";
    try {
        require "../../configs/config.php";
        require "../common.php";
        
        if (!mysql_connect($host, $username, $password)) {
            echo 'Could not connect to mysql';
            exit;
        }
        $sql = "SHOW TABLES FROM $dbname";
        $result = mysql_query($sql);
        
        if (!$result) {
            echo "DB Error, could not list tables\n";
            echo 'MySQL Error: ' . mysql_error();
            exit;
        }
        
        while ($row = mysql_fetch_row($result)) {
            echo "Table: {$row[0]}\n";
        }
        
        mysql_free_result($result);

        
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?>
