<?php  
if (!empty($_GET['id'])) {
    $id=$_GET['id'];
    $sql=$conexion->query("delete from turnos where id=$id");
    if ($sql=1) {
        echo '<div class="alert alert-success">Turno eliminado correctamente</div>';
    } else {
        echo '<div class=class="alert alerte-success">Error al eliimar</div>';
    }
    
}
?>