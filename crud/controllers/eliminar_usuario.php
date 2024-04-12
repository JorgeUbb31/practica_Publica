<?php

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM `usuarios` WHERE id=$id");
    if ($sql==1) {
        echo '<div> persona eliminda</div>';
    } else {
        echo '<div> error en eliminar </div>';
    }
    
}
?>