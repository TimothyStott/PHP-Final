<?php 
// Tim Stott
// 5/25/2022
// Assignment 12
// This code will create a table called VIDEOGAMES in the database baseball_01 if one does not already exist. 
// Reference for help with code: Programming PHP by Kevin Tatroe and Peter MacIntyre and the PHP Manual

$host = "localhost";
$user = "student1";
$pass = "pass";
$dbName = "baseball_01";
#query to create table
$createQuery = "CREATE TABLE IF NOT EXISTS VIDEOGAMES (
    RELEASE_DATE INT(4),
    TITLE VARCHAR(100),
    DEVELOPER VARCHAR(100),
    SALES DECIMAL(13,2),
    PRODUCER VARCHAR(100))";


$connection = new mysqli($host, $user, $pass, $dbName) or die();

$connection->query($createQuery);

echo "VIDEOGAME table created";
?>