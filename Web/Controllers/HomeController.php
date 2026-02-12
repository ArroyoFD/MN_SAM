<?php

if(isset($_POST["btnRegistrar"])){

    //Validaciones
    
    $nombre= $_POST["Nombre"];
    $identificacion= $_POST["Identificacion"];
    $password= $_POST["Password"];
    $result= Registrar($nombre,$identificacion,$password);

    if($result){
        header("Location: ../../Views/vHome/login.php");
        exit;
    }else{
        $_POST["Mensaje"]="Su información no fue registrada correctamente";
    }
}
?>