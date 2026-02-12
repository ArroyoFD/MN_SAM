<?php

function Registrar($identificacion, $nombre,$password){

    //Abrir la BD
    $context= mysqli_connect("127.0.0.1:3308","root","","mn_db");

    //Ejecutar sentencia
    $sp="CALL sp_Registrar('$identificacion','$nombre','$password')";
    $context -> query($sp);
    //Cerrar la bd
    mysqli_close($context);
}
?>