<?php

if (!empty($_POST["btnregister"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["fecha"]) && !empty($_POST["dni"]) && !empty($_POST["correo"])) {
        
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $fecha = $_POST["fecha"];
        $dni = $_POST["dni"];
        $correo = $_POST["correo"];
        

        $validar = $conexion->prepare("SELECT * FROM usuarios WHERE dni = ?");
        $validar->bind_param("s", $dni);
        $validar->execute();
        $result = $validar->get_result();
        
        if ($result->num_rows > 0) {
            echo '<div class="alert alert-warning">Usuario ya registrado</div>';
        } else {
            
            $sql = $conexion->prepare("INSERT INTO usuarios (nombre, apellido, dni, fecha_de_nacimiento, correo) VALUES (?, ?, ?, ?, ?)");
            $sql->bind_param("sssss", $nombre, $apellido, $dni, $fecha, $correo);
            
            if ($sql->execute()) {
                echo '<div class="alert alert-success">Usuario registrado exitosamente</div>';
            } else {
                echo '<div class="alert alert-danger">Error al intentar registrar al usuario</div>';
            }
        }
    } else {
        echo '<div class="alert alert-warning">Algun campo está vacio</div>';
    }
}
?>
