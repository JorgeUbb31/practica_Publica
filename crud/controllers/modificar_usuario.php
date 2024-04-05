<?php

if (!empty($_POST["btnregister"])) {
    if (!empty($_POST["nombre"]) & (!empty($_POST["apellido"])) & (!empty($_POST["dni"])) & (!empty($_POST["fecha"])) & (!empty($_POST["correo"]))) {
        $dni=$_POST["dni"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];
        $sql=$conexion->query(" update usuarios set nombre='$nombre', apellido='$apellido', fecha=$fecha_de_nacimietno, correo='$correo' where dni_usuarios=$dni");
        if ($sql==1) {
            header("location:index.php");
        }else {
            echo "<div class='alert alert danger'> error en la modificacion de usuario</div>";
        }
    }else {
        echo "<div class='alert alert warning'> algun espacio esta vacio</div>";
    }
}

?>