<?php 

include("./Conexion.php");

class Consultas{
    function login(){
        $obj_conexion = new ConexionBD();
        $Conn = $obj_conexion->IniciarConexion();
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $consulta = "SELECT * FROM usuariosestudiantes WHERE NombreUsuario = '$correo' AND contrasena = '$contrasena'";
        $resultado = mysqli_query($Conn, $consulta);
        if ($resultado) {
            $usuario = mysqli_fetch_assoc($resultado);
            if ($usuario) {
                // El usuario existe y la contraseña es correcta
                // return true;
                echo "1";
            } else {
                // El usuario no existe o la contraseña es incorrecta
                // return false;
                echo "2";
            }
        } else {
            // Error en la consulta
            // return false;
            echo "3";
        }
    }
}

$obj_Consultas = new Consultas();
if(isset($_POST['Login'])){
    $obj_Consultas->login();
}
?>