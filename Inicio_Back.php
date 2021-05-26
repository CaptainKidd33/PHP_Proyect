<?php
//Llama a la conexion con la BD
include("SQL_Conexion.php");

//Toma el contenido del Forms
$Correo = $_POST['correo'];
$Contraseña = $_POST['contraseña'];

//Valida que exista en la base de datos
$sql="SELECT * FROM Users WHERE Correo='$Correo' and Contraseña='$Contraseña'";
$result=sqlsrv_query($con, $sql);

if(sqlsrv_rows_affected($result)){
	header('Location: Main.php');
}
else{
	header('Location: Fail.php');
}
?>