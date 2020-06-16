<?php

include('exp.php');
error_reporting (0);
$p=$_GET['q'];
$query="select project.*,team_details.* from  project,team_details where project.id=team_details.id and project.id='$p'";
$data=mysqli_query($conn,$query);
$result= mysqli_fetch_assoc($data);
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('5.jpg',10,10,-100);
$pdf->SetFont('Arial','B',18);
$pdf->Cell(40,80,'Hello World!');
$pdf->SetFont('Arial','I',14);
$pdf->Cell(60,100,$result[title]);
$pdf->write(90,$result[roll1]);
$pdf->write(110,$result[roll2]);
$pdf->write(120,$result[roll3]);
$pdf->Cell(65,100,$result[mentor]);
$pdf->write(130,$result[student1]);
$pdf->write(140,$result[student2]);
$pdf->write(150,$result[student3]);



$pdf->Output();
?>