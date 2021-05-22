<?php
    define('FPDF_FONTPATH', '.');
    require ('fpdf.php');

    $image = "left_to_right.png";
    $name = "Left_To_Right";

    //set it to writable location, a place for temp generated PNG files
    $IMG_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR;
    //ofcourse we need rights to create temp dir
    if (!file_exists($IMG_DIR))mkdir($IMG_DIR);

    $pdf = new FPDF();
    $pdf->AddFont('Helvetica-Bold','','helveticab.php');
    
    $pdf->AddPage("L");
    $pdf->centreImage($image);
    
    $pdf->SetFont('Helvetica-Bold','',18);
    $pdf->Ln(71);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(0,0,$name,0,0,'C');
                        
    $targetFile = 'images/' . $name.'.pdf';
    $contentToStore = $pdf->Output($targetFile ,'F');
    // echo '<a target="_blank" href="'.$targetFile.'" download> <button> Download PDF </button></a>';