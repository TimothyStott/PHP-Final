<?php
// Tim Stott
// 5/22/2022
// Assignment 12
// This code will drop the VIDEOGAMES table regardless of any other parameters. 
// Reference for help with code: Programming PHP by Kevin Tatroe and Peter MacIntyre and the PHP Manual

$host = "localhost";
$user = "student1";
$pass = "pass";
$dbName = "baseball_01";

$dropTableSQL = "DROP TABLE VIDEOGAMES";

$connection = new mysqli($host, $user, $pass, $dbName) or die();

$connection->query($dropTableSQL);


#confirmation echo
echo "Table Dropped";
?>