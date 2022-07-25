<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1>Here are the games matching your selection</h1>

    <?php
    // Tim Stott
    // 5/22/2022
    // Assignment 11
    // This code will fetch the data based on a selected Producer and dispaly in a table format.
    // Reference for help with code: Programming PHP by Kevin Tatroe and Peter MacIntyre and the PHP Manual

    $host = "localhost";
    $user = "student1";
    $pass = "pass";
    $dbName = "baseball_01";
    $sqlSelect = "SELECT * FROM VIDEOGAMES";
    $connection = new mysqli($host, $user, $pass, $dbName) or die();
    $result = $connection->query($sqlSelect);


    #grabs all data from table and prints as associative array
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['DEVELOPER'] == $_POST['selectedDev']) {


    ?>
                <div class="table__wrapper">
                    <div>
                        <table>
                            <tr>
                                <th>Title</th>
                                <th>Release Date</th>
                                <th>Sales</th>
                                <th>Developer</th>
                                <th>Producer</th>
                            </tr>
                            <tr>
                                <td><?php echo "{$row['TITLE']}" ?></td>
                                <td><?php echo "{$row['RELEASE_DATE']}" ?></td>
                                <td><?php echo "{$row['SALES']}" ?></td>
                                <td><?php echo "{$row['DEVELOPER']}" ?></td>
                                <td><?php echo "{$row['PRODUCER']}" ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
    <?php

            }
        }
    }
    ?>


    <button><a href="index.html">Home</a></button>


</body>

</html>