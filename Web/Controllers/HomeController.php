<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/MN_SAM/Web/Models/HomeModel.php";
if(isset($_POST["btnRegistrar"])){

    //Validaciones
    
    $nombre= $_POST["Nombre"];
    $identificacion= $_POST["Identificacion"];
    $password= $_POST["Password"];

    $result= RegistrarModel($identificacion,$nombre,$password);

    if ($result) {
        header("Location: ../../Views/vHome/login.php");
        exit;
    }else{
        $_POST["Mensaje"]="Su información no fue registrada correctamente";
    }
}

if(isset($_POST["btnIniciarSesion"])){

    //Validaciones
    $identificacion= $_POST["Identificacion"];
    $password= $_POST["Password"];
    $result= IniciarSesionModel($identificacion,$password);

    if ($result) {
        header("Location: ../../Views/vHome/Inicio.php");
        exit;
    }else{
        $_POST["Mensaje"]="Su información no fue autenticada correctamente";
    }
}
?>