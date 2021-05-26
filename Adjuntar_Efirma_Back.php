<?php	
session_start();

//Mueve los archivos subidos de temp files a un directorio especifico ademas de guardar las variables en la sesion para su posterior uso

if(isset($_POST['upload'])){


    move_uploaded_file($_FILES['certificado']['tmp_name'], "ArchivosCargados/".$_FILES['certificado']['name']);
    move_uploaded_file($_FILES['llave']['tmp_name'], "ArchivosCargados/".$_FILES['llave']['name']);
    move_uploaded_file($_FILES['archivo']['tmp_name'], "ArchivosCargados/".$_FILES['archivo']['name']);

    $Contraseña = $_POST['contraseña']; 

    $_SESSION['contraseña'] = $Contraseña;
    $_SESSION['nombre_cer'] = $_FILES['certificado']['name'];
    $_SESSION['nombre_key'] = $_FILES['llave']['name'];
    $_SESSION['nombre_file'] = $_FILES['archivo']['name'];
    
}

header("Location: Main con Firma.php");



?>


