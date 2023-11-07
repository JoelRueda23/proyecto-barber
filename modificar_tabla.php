<?php
include "./modelo/conexion.php";
$id_user = $_GET['id'];
$sql = $conexion->query("select * from turnos where id=$id_user");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos_index.css">
</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary text-danger">Modificar Turnos</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
        include "controlador/modificar_turno.php";
        while($datos=$sql->fetch_object()) { ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nro° Celular</label>
                <input type="number" class="form-control" name="celular" value="<?= $datos->celular ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Turno</label>
                <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Hora de Turno</label>
                <input type="time" class="form-control" name="hora" value="<?= $datos->hora ?>">
            </div>
        <?php
        };
        ?>

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar Turno</button>
        <a href="index.php" class="btn btn-primary" name="btncancelar">Cancelar</button></a>
    </form>
</body>

</html>