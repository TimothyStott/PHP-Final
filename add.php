<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
<?php
// Tim Stott
// 5/22/2022
// Assignment 12
// This code will let the user know that their entry was accepted
// Reference for help with code: Programming PHP by Kevin Tatroe and Peter MacIntyre and the PHP Manual

$host = "localhost";
$user = "student1";
$pass = "pass";
$dbName = "baseball_01";
$connection = new mysqli($host, $user, $pass, $dbName) or die();
$DEFAULT_RELEASE_DATE = 2000;

$title = "".$_POST['title']."";

$relDate = $_POST['releaseDate'];
if(!is_numeric($relDate)){
    $relDate = $DEFAULT_RELEASE_DATE;
    #Shows user they have entered a date incorrect and it was set to a default
    echo "<script>alert('Release Date was not numeric set to 2000 as default');</script>";
}

$dev = "".$_POST['developer']."";

$pro = "".$_POST['producer']."";

$sales = $_POST['sales'];
if(!is_numeric($sales)){
    $sales = 100000000;
    #Shows user they have entered sales incorrect and it was set to a default
    echo "<script>alert('Release Date set to 100000000 as default');</script>";
}

$sqlInsert = "INSERT INTO VIDEOGAMES (RELEASE_DATE,TITLE,DEVELOPER,SALES,PRODUCER)
VALUES
('$relDate','$title','$dev','$sales','$pro')";

$connection->query($sqlInsert);
?>

<h1>Your game was added, congrats.</h1>
<h2>Thing to note though, if you entered bad info, we still added it.</h2>
<button><a href="index.html">Return Home</a></button>
</body>
</html>



