
    <?php


// Tim Stott
// 5/22/2022
// Assignment 12
// This code displays a printable PDF of all data in the database.
// This code also allows the user to print the database from the homepage 
// Reference for help with code: Programming PHP by Kevin Tatroe and Peter MacIntyre and the PHP Manual it should be noted this is mostly copied code from the introductory video.-->



    
    require('fpdf.php');

    $host = "localhost";
    $user = "student1";
    $pass = "pass";
    $dbName = "baseball_01";
    $sqlSelect = "SELECT * FROM VIDEOGAMES";

    $connection = new mysqli($host, $user, $pass, $dbName) or die();
    $result = $connection->query($sqlSelect);
    
    $pdf = new FPDF();
    $pdf->AddPage();

    #creates rectangle border
    $pdf->Rect(5,5,200,287,'D');

    #Title cell
    $pdf->SetFont('helvetica','B',20);
    $pdf->Cell(190,15,'VIDEO GAME SALES DATABASE',0,1,'C',false);

    $width_cell=array(60,20,33,36,41);


    #Header Cells
    $pdf->SetFont('courier','B',15);
    $pdf->Cell($width_cell[0],10,'TITLE',0,0,'C',false);    
    $pdf->Cell($width_cell[1],10,'DATE',0,0,'C',false);
    $pdf->Cell($width_cell[2],10,'SALES',0,0,'C',false);
    $pdf->Cell($width_cell[3],10,'DEVELOPER',0,0,'C',false);
    $pdf->Cell($width_cell[4],10,'PRODUCER',0,1,'C',false);

    $pdf->SetFillColor(53,150,255);
    $pdf->SetFont('courier','B',10);
    #Adds all database information
    $pdf->SetTextColor(255,255,255);
    if (mysqli_num_rows(($result))){
        while($row = mysqli_fetch_assoc($result)){
            $pdf->Cell($width_cell[0],15,$row['TITLE'],1,0,'C',true);    
            $pdf->Cell($width_cell[1],15,$row['RELEASE_DATE'],1,0,'C',true);
            $pdf->Cell($width_cell[2],15,'$'.$row['SALES'],1,0,'C',true);
            $pdf->Cell($width_cell[3],15,$row['DEVELOPER'],1,0,'C',true);
            $pdf->Cell($width_cell[4],15,$row['PRODUCER'],1,1,'C',true);
        }
    }


    $pdf->SetFont('helvetica','B',12);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(190,15,'End of record',0,1,'C',false);

    $connection->close();
    $pdf->Output();
    ?>


