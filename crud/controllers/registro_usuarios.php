<?php

if (!empty($_POST["btnregister"])) {
    if (!empty($_POST["nombre"]) & (!empty($_POST["apellido"])) & (!empty($_POST["dni"])) & (!empty($_POST["fecha"])) & (!empty($_POST["correo"]))){
        
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];

        $sql=$conexion->query("INSERT INTO `usuarios`(`nombre`, `apellido`, `fecha_de_nacimiento`, `dni`, `correo`) VALUES ('$nombre','$apellido','$fecha','$dni','$correo')");
        if ($sql==1) {
            echo '<div class alert alert-success>"usuario registrado efectuivamente" </div>';
        } else {
            echo '<div class alert alert-danger>"error al intentar registrar al usuario" </div>';
        }
        
    }else{
         echo '<div class=alert alert-warning>"algun campo esta vacio"</div>';
    }
}
?>