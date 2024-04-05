<?php

if (!empty($_GET["$dni"])) {
    $dni=$_GET["$dni"];
    $sql=$conexcion->query("delete from usuarios where dni=$dni");
    if ($sql==1) {
        echo '<div> usuario eliminado</div>';
    } else {
        echo '<div> error al eliminar </div>';
    }
    
}

?>