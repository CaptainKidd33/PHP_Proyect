<?php	

//Carga las librerias correspondiente TCPDF. FPDI y FPDF para extraer los datos del .key y .cer e imprimirlos sobre el documentos seleccionados

date_default_timezone_set('America/Monterrey');
use setasign\Fpdi\Fpdi;
require_once('vendor/autoload.php');
session_start();

$certificado= 'C:/xampp/htdocs/Proyecto_Danae/ArchivosCargados/'.$_SESSION['nombre_cer'];
$llave = 'C:/xampp/htdocs/Proyecto_Danae/ArchivosCargados/'.$_SESSION['nombre_key'];
$contraseña = $_SESSION['contraseña'];
$archivo = $_SESSION['nombre_file'];

$fiel = PhpCfdi\Credentials\Credential::openFiles($certificado, $llave, $contraseña);

$sourceString = 'Valido este documento';

$signature = $fiel->sign($sourceString);
$firma = "La firma electronica es:".base64_encode($signature);

$verify = $fiel->verify($sourceString, $signature);

$certificado = $fiel->certificate();
$rfc = "El RFC del Firmante es:".$certificado->rfc();
$name = "El nombre del firmante es:".$certificado->legalName();
$cer =  "El numero del certificado es:".$certificado->serialNumber()->bytes();
$Fecha = "Este documento fue firmado el dia ". date("Y/m/d") ." A las". date("h:i:sa");

$pdf = new FPDI();
$pageCount = $pdf->setSourceFile('C:/xampp/htdocs/Proyecto_Danae/ArchivosCargados/'.$archivo);

for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
$templateId = $pdf->importPage($pageNo);
$size = $pdf->getTemplateSize($templateId);

if ($size['0'] > $size['1']) {
    $pdf->AddPage('L', array($size['0'], $size['1']));
} else {
    $pdf->AddPage('P', array($size['0'], $size['1']));
}

$pdf->useTemplate($templateId);
$pdf->SetFont('Arial');
$pdf->SetXY(5, 5);
}

 $pdf->AddPage();  
 $pdf->Multicell(0,2,"\n\n\n\n\n");
 $pdf->Write(3, $name);
 $pdf->Multicell(0,2,"\n\n\n\n\n"); 
 $pdf->Write(3, $rfc);
 $pdf->Multicell(0,2,"\n\n\n\n\n"); 
 $pdf->Write(3, $cer);
 $pdf->Multicell(0,2,"\n\n\n\n\n");
 $pdf->Write(3, $Fecha);
 $pdf->Multicell(0,2,"\n\n\n\n\n");
 $pdf->Write(4, $firma);
 $pdf->Multicell(0,2,"\n\n\n\n\n");

$pdf->Output('F', 'C:/xampp/htdocs/Proyecto_Danae/DocumentosFirmados/'.$archivo);

header("Location: SAT_3.php");

?>