<?php

//Corre un comando en cmd con openssl para convertir los .key y .cer en .pem y .crt

session_start();

$certificado= $_SESSION['nombre_cer'];
$llave = $_SESSION['nombre_key'];
$contraseña = $_SESSION['contraseña'];

shell_exec('C:\OpenSSL-Win64\bin\openssl pkcs8 -inform DER -in C:/xampp/htdocs/Proyecto_Danae/ArchivosCargados/'.$llave.' -out C:/xampp/htdocs/Proyecto_Danae/ArchivosCargados/llave.pem  -passin pass:'.$contraseña );
shell_exec('C:\OpenSSL-Win64\bin\openssl x509 -inform DER -in C:/xampp/htdocs/Proyecto_Danae/ArchivosCargados/'.$certificado.' -out  C:/xampp/htdocs/Proyecto_Danae/ArchivosCargados/certificado.crt' );

header('Location: SAT_2.php');

?>
