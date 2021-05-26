<?php	

//Carga las librerias correspondiente TCPDF. FPDI y FPDF para firmar el documento, ademas de borrar los archivos que se generaron
use setasign\Fpdi\Tcpdf\Fpdi;
require_once('vendor/autoload.php');
session_start();

$cerFile = 'file://'.realpath('ArchivosCargados/certificado.crt'); 
$pemKeyFile = 'file://'.realpath('ArchivosCargados/llave.pem'); 
$passPhrase = $_SESSION['contraseña'];
$archivo = $_SESSION['nombre_file'];



$pdf = new FPDI('P', 'mm', 'A4');

$pages = $pdf->setSourceFile('C:/xampp/htdocs/Proyecto_Danae/DocumentosFirmados/'.$archivo);


$info = array(

    );

for ($i = 1; $i <= $pages; $i++)
    {
        $pdf->AddPage();
        $page = $pdf->importPage($i);
        $pdf->useTemplate($page, 0, 0);

        $pdf->setSignature($cerFile, $pemKeyFile, $passPhrase, '', 2, $info);      

}

$pdf->Output('C:/xampp/htdocs/Proyecto_Danae/DocumentosFirmados/'.$archivo, 'F');


$folder_path = "ArchivosCargados";
   

$files = glob($folder_path.'/*'); 
   

foreach($files as $file) {
   
    if(is_file($file)) 
    
        
        unlink($file); 
}

header("Location: Main.php");

?>