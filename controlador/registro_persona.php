<?php
if(!empty($_POST["btnregistrar"])){
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["celular"]) and !empty($_POST["fecha"]) and !empty($_POST["hora"])) {
        
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $celular=$_POST["celular"];
        $fecha=$_POST["fecha"];
        $hora=$_POST["hora"];

        $sql=$conexion->query("insert into turnos(nombre, apellido, celular, fecha, hora)value('$nombre', '$apellido', '$celular', '$fecha', '$hora')");
        if ($sql==1) {
            echo '<div class="alert alert-success">Turno Registrado Correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Turno no se ha Registrado Correctamente</div>';
        }
        
    }else{
        echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
    }
}

?>