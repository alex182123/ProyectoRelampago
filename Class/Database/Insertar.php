<?php 
include("Conexion.php");

Class Insertar{
    function Registrar(){
        $obj_conexion = new ConexionBD();
        $Conn = $obj_conexion->IniciarConexion();
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena']; 
        $consulta = "INSERT INTO usuariosestudiantes(NombreEstudiante,ApellidosEstudiante,NombreUsuario,Contrasena) VALUES('".$nombre."','".$apellidos."','".$usuario."','".$contrasena."')";
        $resultado = mysqli_query($Conn, $consulta);
        return true;
    }
}
$obj_Insertar = new Insertar();
if(isset($_POST['Registrar'])){
    $obj_Insertar->Registrar();
}
?>