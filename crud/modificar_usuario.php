<?php
include "models\conexion.php";
$dni=$_GET["dni"];

$sql=$conexion->query("select * from usuarios where dni_usuarios=$dni");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form class="col-4 p-3 m-auto" method="post">
            <div class="registro">
            <h3 class="text-center text-secondary" >modificar de usuarios</h3>
            <input type="hidden" name="dni" VALUES="<?= $_GET["dni"]?>">
            <?php 
            include "controllers\modificar_usuario.php";
            while ($datos=$sql->fetch_object()) { ?>
                </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" VALUES="<?$datos->nombre?>">
                    </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido" VALUES="<?$datos->apellido?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">dni</label>
                    <input type="text" class="form-control" name="dni">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha" VALUES="<?$datos->fecha_de_nacimiento?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">correo</label>
                    <input type="text" class="form-control" name="correo" VALUES="<?$datos->correo?>">
                </div>
            <?php }
            ?>

            <button type="submit" class="btn btn-primary" name="btnregister" value="ok">modificar</button>
        </form>
</body>
</html>