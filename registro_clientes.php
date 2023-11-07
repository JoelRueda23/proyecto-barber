<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9cc1d5b457.js" crossorigin="anonymous"></script>
    <title>Registro de Clientes</title>
</head>
<body>
    <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary text-danger">Registro</h3>
            <?php 
            
            // include "controlador/registro_clientes.php";
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
    </div>
</body>
</html>