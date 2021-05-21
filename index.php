<?php
    define('FPDF_FONTPATH', '.');
    require ('fpdf.php');
    $image = "Place_Image.png";
    $name ="Your Name";

    $pdf = new FPDF();
    $pdf->AddFont('Helvetica-Bold','','helveticab.php');
    $pdf->AddPage();
    $pdf->Image($image,5,10,200);

    $pdf->SetFont('Helvetica-Bold','',28);
    $pdf->Ln(112);//112 Line Dynamic Name should place
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(0,0,$name,0,0,'C');//0,0 Means - Center of 112 Line, Name will place
    //If you want left align or right align - Change First 0,0 Values in Cell 

    //set it to writable location, a place for temp generated PNG files
    $IMG_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR;
    //ofcourse we need rights to create temp dir
    if (!file_exists($IMG_DIR))mkdir($IMG_DIR);
                        
    $targetFile = 'images/' . $name.'.pdf';
    $contentToStore = $pdf->Output($targetFile ,'F');        

    // echo '<a target="_blank" href="'.$targetFile.'" download> <button> Download PDF </button></a>';
?>