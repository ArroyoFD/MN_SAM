<?php

function RegistrarModel($identificacion, $nombre,$password){

    //Abrir la BD
    $context= mysqli_connect("127.0.0.1:3306","root","","mn_db");

    //Ejecutar sentencia
    $sp="CALL sp_Registrar('$identificacion','$nombre','$password')";
    $result= $context -> query($sp);
    //Cerrar la bd
    mysqli_close($context);
    return $result;
}

function IniciarSesionModel($identificacion,$password){

    //Abrir la BD
    $context= mysqli_connect("127.0.0.1:3306","root","","mn_db");

    //Ejecutar sentencia
    $sp="CALL sp_IniciarSesion('$identificacion','$password')";
    $context -> query($sp);
    //Cerrar la bd
    mysqli_close($context);
}
?>