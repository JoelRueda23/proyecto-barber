<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9cc1d5b457.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/estilos_index.css">
</head>

<body>
<a onclick="return salir()" href="./login.html" class="btn btn-big btn-danger"><i class="fa-solid fa-right-from-bracket"></i></a>
<a href="./home_admin.html" class="btn btn-big btn-warning"><i class="fa-solid fa-arrow-left"></i></a>
    <script>
        function eliminar(){
            var respuesta=confirm("Desea eliminar Turno?");
            return respuesta
        }
        function salir(){
            var respuesta=confirm("Desea Salir?")
            return respuesta
        }
    </script>
    <h1 class="text-center text-secondary text-danger">Bienvenidos al Sistema de Gestion de Turnos</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_turno.php";
    ?>
    <div class="container-fliud row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary text-danger">Registro de Turnos</h3>
            <?php 
            
            include "controlador/registro_persona.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Nro° Celular</label>
                <input type="number" class="form-control" name="celular">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Fecha de Turno</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Hora de Turno</label>
                <input type="time" class="form-control" name="hora">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nro° Celular</th>
                        <th scope="col">Fecha de Turno</th>
                        <th scope="col">Hora de Turno</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from turnos");
                    while($datos=$sql->fetch_object()){?>
                    <tr>
                        <td><?= $datos->id ?></td>
                        <td><?= $datos->nombre ?></td>
                        <td><?= $datos->apellido ?></td>
                        <td><?= $datos->celular ?></td>
                        <td><?= $datos->fecha ?></td>
                        <td><?= $datos->hora ?></td>
                        <td>
                            <a href="modificar_tabla.php?id=<?= $datos->id?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a onclick="return eliminar()" href="index.php?id=<?=$datos->id?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    
                    <?php
                    }
                    ?>
                    
                    
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>