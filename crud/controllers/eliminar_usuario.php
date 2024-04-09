<?php

if (!empty($_GET["dni"])) {
    $dni=$_GET["dni"];
    $sql=$conexion->query("DELETE FROM `usuarios` WHERE dni=$dni");
    if ($sql==1) {
        echo '<div> persona eliminda</div>';
    } else {
        echo '<div> error en eliminar </div>';
    }
    
}
?>