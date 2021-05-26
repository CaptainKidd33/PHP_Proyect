
<?php
// LLama a la conexion con la BD
include("SQL_Conexion.php");

// Si es enviado algo guardara el contenido del form en las variables elegidas
if (isset($_POST['insert'])){
 $Nombre = $_POST['Nombre'];
 $AP = $_POST['AP'];
 $AM = $_POST['AM'];
 $Correo = $_POST['Correo'];
 $Contraseña = $_POST['Contraseña'];

//Crea una sentencia de inster en la bsae de datos
$insertar="INSERT INTO Users (Nombre, AP, AM, Correo, Contraseña) values ('$Nombre', '$AP','$AM' ,'$Correo'  , '$Contraseña')";

//Si algun campo esta vacio vuelve a cargar la pagina de registro
if(empty($Nombre) || empty($AP) || empty($AM) || empty($Correo) || empty($Contraseña)  ){
	header('Location: Registrarse.php');
}

//Si se llenaron correctamente los campos ejecuta la sentencia insert y redirige para que inices sesion
else{
	$ejecutar= sqlsrv_query($con, $insertar);
	header('Location: Inicio de Sesion.php');
}


}

?>