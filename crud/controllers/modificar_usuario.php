<?php

if (!empty($_POST["btnregister"])) {
    if (!empty($_POST["nombre"]) & !empty($_POST["apellido"]) & !empty($_POST["dni"]) & !empty($_POST["fecha"]) & !empty($_POST["correo"])) {
        $dni=$_POST["dni"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];
        $sql=$conexion->query("UPDATE `usuarios` SET `nombre`='$nombre',`apellido`='$apellido',`fecha_de_nacimiento`='$fecha',`correo`='$correo' WHERE dni=$dni");
        if ($sql==1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert=danger'> campo vacios</div>";
        }
        
    }else {
        echo "<div class='alert alert=warning'> campo vacios</div>";
    }
}

?>