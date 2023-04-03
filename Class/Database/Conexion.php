<?php
class ConexionBD{
    function IniciarConexion(){
        $conn = mysqli_connect("tiusr2pl.cuc-carrera-ti.ac.cr","ProRel","Holamundo","tiusr2pl_ProyectoRelamp");
        return $conn;
    }
}
?>