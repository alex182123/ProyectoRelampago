<?php
include("Conexion.php");

class Insertar
{
    function Registrar()
    {
        $obj_conexion = new ConexionBD();
        $Conn = $obj_conexion->IniciarConexion();
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $consulta = "INSERT INTO usuariosestudiantes(NombreEstudiante,ApellidosEstudiante,NombreUsuario,Contrasena) VALUES('" . $nombre . "','" . $apellidos . "','" . $usuario . "','" . $contrasena . "')";
        $resultado = mysqli_query($Conn, $consulta);
        return true;
    }
    function Caracteristicas()
    {
        $obj_conexion = new ConexionBD();
        $Conn = $obj_conexion->IniciarConexion();
        $id = $_POST['id'];
        $carac = $_POST['carac'];
        $idea1 = $_POST['idea1'];
        $idea2 = $_POST['idea2'];
        $idea3 = $_POST['idea3'];
        $aspecto1 = $_POST['aspecto1'];
        $aspecto2 = $_POST['aspecto2'];
        $aspecto3 = $_POST['aspecto3'];
        $politico = $_POST['politico'];
        $economico = $_POST['economico'];
        $social = $_POST['social'];
        $tecnologico = $_POST['tecnologico'];
        $ecologico = $_POST['ecologico'];
        $legal = $_POST['legal'];
        $consulta = "INSERT INTO caracteristicas(Caracteristica,IDEstudiante,Idea1,Idea2,Idea3,Aspecto1,Aspecto2,Aspecto3,P,E,S,T,Ec,L) VALUES('" . $carac . "','" . $id . "','" . $idea1 . "','" . $idea2 . "','" . $idea3 . "','" . $aspecto1 . "','" . $aspecto2 . "','" . $aspecto3 . "','" . $politico . "','" . $economico . "','" . $social . "','" . $tecnologico . "','" . $ecologico . "','" . $legal . "')";
        $resultado = mysqli_query($Conn, $consulta);
        return true;
    }
}
$obj_Insertar = new Insertar();
if (isset($_POST['Registrar'])) {
    $obj_Insertar->Registrar();
}
if (isset($_POST['Caracteristicas'])) {
    $obj_Insertar->Caracteristicas();
}
?>