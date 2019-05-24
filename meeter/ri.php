<?php
$host="ls-e4e3cbb511361cb2edb5d083f158e77a49afb24f.c2cwx5xdgogr.us-east-1.rds.amazonaws.com";
$port=3306;
$socket="";
$user="dbmaster";
$password="Tw0Zer019R0mans1212!";
$dbname="meeter";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
or die ('Could not connect to the database server' . mysqli_connect_error());

$query = "SELECT `Meeter`.`ID`,     `Meeter`.`Config`,     `Meeter`.`Version`,     `Meeter`.`Setting` FROM `meeter`.`Meeter";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($ID, $Config, $Version, $Setting);
    while ($stmt->fetch()) {
        printf("%s, %s, %s, %s\n", $ID, $Config, $Version, $Setting);
    }
    $stmt->close();
}
$con->close();




echo "connection made";