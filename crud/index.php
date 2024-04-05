<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>como es que me manejo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/55867e6547.js" crossorigin="anonymous"></script>
</head>
<body>
    <script>
        function eliminar() {
            var respuesta=confirm("¿seguro al eliminar usuario?");
            return respuesta
        }
    </script>
    <h1 class="text-center p-3"> hola xd</h1>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="post">
            <div class="registro">
            <h3 class="text-center text-secondary" >registro de usuarios</h3>
            <?php 
            include "models/conexion.php";
            include "controllers\eliminar_usuario.php";
            include "controllers/registro_usuarios.php";
            ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">dni</label>
                <input type="text" class="form-control" name="dni">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">correo</label>
                <input type="text" class="form-control" name="s">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregister" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">fecha de nacimiento</th>
                    <th scope="col">dni</th>
                    <th scope="col">correo</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                    <tbody>
                        <?php
                            include "models/conexion.php";
                            $sql=$conexion->query("select * from usuarios");
                            while($datos=$sql->fetch_object()){?>
                                <tr>
                                    <td><?= $datos->nombre?></td>
                                    <td><?= $datos->apellido?></td>
                                    <td><?= $datos->fecha_de_nacimiento?></td>
                                    <td><?= $datos->dni?></td>
                                    <td><?= $datos->correo?></td>
                                    <td>
                                        <a href="modificar_usuario.php?dni=<?= $datos->dni?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a onclick="return eliminar()" href="index.php?dni=<?= $datos->dni?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                    </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>