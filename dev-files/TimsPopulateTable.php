<?php
// Tim Stott
// 5/22/2022
// Assignment 12
// This code will populate 8 rows of video game data for the VIDEOGAME table. 
// Reference for help with code: Programming PHP by Kevin Tatroe and Peter MacIntyre and the PHP Manual

$host = "localhost";
$user = "student1";
$pass = "pass";
$dbName = "baseball_01";

$inserIntoSQL ="INSERT INTO VIDEOGAMES (RELEASE_DATE,TITLE,DEVELOPER,SALES,PRODUCER)
VALUES
(2011,'Minecraft','Mojang Studios',238000000,'Xbox Game Studios'),
(2013,'Grand Thef Auto V','Rockstar North',160000000,'Rockstar Games'),
(2006,'Tetris (EA)','EA Mobile',100000000,'Electronic Arts'),
(2017,'PUBG','PUBG Corportaion',75000000,'PUBG Corporation'),
(1985,'Super Mario Bros','Nintendo R&D4',58000000,'Nintendo'),
(2006,'Wii Sports','Nintendo EAD',82900000,'Nintendo'),
(1996,'Pokeomon Red/Blue/Yellow','Game Freak',47520000,'Nintendo'),
(2011,'Terraia','Re-Logic',35000000,'Re-Logic/505 Games')";


$connection = new mysqli($host, $user, $pass, $dbName) or die();
$connection->query($inserIntoSQL);

echo "That worked";
?>