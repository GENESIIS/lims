<?php
include 'connection.php';
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
?>