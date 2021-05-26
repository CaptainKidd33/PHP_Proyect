<?php


//Nombre del Servidor
$serverName= 'KARLA-LAP';

//Nombre de la base de datos, usuario y contraseña
$connectionInfo= array("Database" => "SAT", "UID" =>"Danae_Sat", "PWD"=>"test", "CharacterSet" => "UTF-8");
$con= sqlsrv_connect($serverName, $connectionInfo);

if($con){
    echo "Conexion Exitosa";
}

?>