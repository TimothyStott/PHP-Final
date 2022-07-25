<!DOCTYPE html>
<html lang="en">
<head>

<!-- 
// Tim Stott
// 5/22/2022
// Assignment 12
// This code displays a select form that will allow the user to search the database by developer
// Reference for help with code: Programming PHP by Kevin Tatroe and Peter MacIntyre and the PHP Manual -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="main.css">

</head>
<body>
    <?php
$host = "localhost";
$user = "student1";
$pass = "pass";
$dbName = "baseball_01";
$sqlSelect = "SELECT * FROM VIDEOGAMES";

$connection = new mysqli($host, $user, $pass, $dbName) or die();
$result = $connection->query($sqlSelect);

echo "<h1>Look Up By Developer</h1>";
?>


<label for="developer">Choose a Developer</label>


<form action="query-result.php" method="POST">


<select name="selectedDev" id="selectedDev">


<?php
#grabs all of hte developers from the database and displays them as select options. 
 if (mysqli_num_rows($result) > 0){

     while ($row = mysqli_fetch_assoc($result)){

            echo('<option value = "' . $row['DEVELOPER'] . '">' . $row['DEVELOPER'] . '</option>');     
}
 }
?>


</select>

<input type="submit" value="submit" />

</form>

<button><a href="index.html">Return Home</a></button>
</body>
</html>






