<?php

if (!empty($_POST['btnregistrar'])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["celular"]) and !empty($_POST["fecha"]) and !empty($_POST["hora"])){
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $celular=$_POST["celular"];
        $fecha=$_POST["fecha"];
        $hora=$_POST["hora"];

        $sql=$conexion->query(" update turnos set nombre='$nombre', apellido='$apellido', celular='$celular', fecha='$fecha', hora='$hora' where id='$id'");
        if ($sql==1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar turno</div>";
        }
        

    }else{
        echo "<div class='alert alert-warning'>Hay Campos Vacios</div>";
    }
}


?>