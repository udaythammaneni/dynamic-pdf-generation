<?php
define('FPDF_FONTPATH','.');
require('fpdf.php');

$image="Place_Image.png";
$logo = "Place_Image1.jpg";
$name ="Your_Name";

//set it to writable location, a place for temp generated PNG files
$IMG_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR;
//ofcourse we need rights to create temp dir
if (!file_exists($IMG_DIR))mkdir($IMG_DIR);

$pdf = new FPDF();
$pdf->AddFont('Helvetica-Bold','','helveticab.php');
$pdf->AddPage();
$pdf->Image($image,5,10,200);
$pdf->Image($logo,65.5,94.5,79);

$pdf->SetFont('Helvetica-Bold','',20);
$pdf->Ln(148);
$pdf->SetTextColor(11,102, 35);//green
$pdf->Cell(0,0,$name,0,0,'C');

$targetFile = 'images/' .$name.'.pdf';
$contentToStore = $pdf->Output($targetFile ,'F'); 
// echo '<a target="_blank" href="'.$targetFile.'" download> <button> Download PDF </button></a>';