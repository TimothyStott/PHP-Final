<?php
// Tim Stott
// 5/12/2022
// Assignment 12
// This code will fetch all data from the VIDEOGAMES table and print it out as an associated array.
// Reference for help with code: Programming PHP by Kevin Tatroe and Peter MacIntyre and the PHP Manual

$host = "localhost";
$user = "student1";
$pass = "pass";
$dbName = "baseball_01";
$sqlSelect = "SELECT * FROM VIDEOGAMES";

$connection = new mysqli($host, $user, $pass, $dbName) or die();
$result = $connection->query($sqlSelect);


#grabs all data from table and prints as associative array
if (mysqli_num_rows($result) > 0){

    while ($row = mysqli_fetch_assoc($result)){
        foreach($row as $key=>$value){
            echo $key. " is ". $value. " ";
        }
        echo "<br/>";
    }
}


?>