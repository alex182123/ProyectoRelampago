<?php

include("./Conexion.php");

class Consultas
{
    function login()
    {
        $obj_conexion = new ConexionBD();
        $Conn = $obj_conexion->IniciarConexion();
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $consulta = "SELECT IDEstudiante FROM usuariosestudiantes WHERE NombreUsuario = '$correo' AND contrasena = '$contrasena'";
        $resultado = mysqli_query($Conn, $consulta);
        if ($resultado) {
            $usuario = mysqli_fetch_assoc($resultado);
            if ($usuario) {
                // El usuario existe y la contraseña es correcta
                // return true;
                echo $usuario['IDEstudiante'];
            } else {
                // El usuario no existe o la contraseña es incorrecta
                // return false;
                echo 'false';
            }
        } else {
            // Error en la consulta
            // return false;
            echo 'false';
        }
    }
    function ConsultarCaracteristicas()
    {
        $obj_conexion = new ConexionBD();
        $Conn = $obj_conexion->IniciarConexion();
        $id = $_POST['ID'];
        $consulta = "SELECT * FROM caracteristicas WHERE IDEstudiante = $id";
        $resultado = mysqli_query($Conn, $consulta);
        if ($resultado) {

            while ($usuario = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $usuario['Caracteristica'] . "</td>";
                echo "<td>Externo</td>";
                echo "<td>" . $usuario['P'] . "</td>";
                echo "<td>" . $usuario['E'] . "</td>";
                echo "<td>" . $usuario['S'] . "</td>";
                echo "<td>" . $usuario['T'] . "</td>";
                echo "<td>" . $usuario['Ec'] . "</td>";
                echo "<td>" . $usuario['L'] . "</td>";
                echo '<td> <button type="button" class="btn btn-link text-dark" onclick="VerDetalles('.$usuario["idCaracteristica"].')" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-eye"></i> Ver detalles
              </button></td>';
                echo "</tr>";
            }
            echo "</tbody>";
        }
    }
    function ConsultarDetalles()
    {
        $obj_conexion = new ConexionBD();
        $Conn = $obj_conexion->IniciarConexion();
        $id = $_POST['ID'];
        $consulta = "SELECT * FROM caracteristicas WHERE IdCaracteristica = $id";
        $resultado = mysqli_query($Conn, $consulta);
        if ($resultado) {

            $usuario = mysqli_fetch_assoc($resultado);
            echo '
            <div class="mb-3">
    <label for="carac" class="form-label">Característica</label>
    <input type="text" class="form-control txt-angel text-center" id="carac" name="carac" value="' . $usuario["Caracteristica"] . '" readonly>
  </div>
  <div class="mb-3">
    <label for="idea1" class="form-label">Idea 1</label>
    <input type="text" class="form-control txt-angel text-center" id="idea1" name="idea1" value="' . $usuario["Idea1"] . '" readonly>
  </div>
  <div class="mb-3">
    <label for="idea2" class="form-label">Idea 2</label>
    <input type="text" class="form-control txt-angel text-center" id="idea2" name="idea2" value="' . $usuario["Idea2"] . '" readonly>
  </div>
  <div class="mb-3">
    <label for="idea3" class="form-label">Idea 3</label>
    <input type="text" class="form-control txt-angel text-center" id="idea3" name="idea3" value="' . $usuario["Idea3"] . '" readonly>
  </div>
  <div class="mb-3">
    <label for="aspecto1" class="form-label">Aspecto 1</label>
    <input type="text" class="form-control txt-angel text-center" id="aspecto1" name="aspecto1" value="' . $usuario["Aspecto1"] . '" readonly>
  </div>
  <div class="mb-3">
    <label for="aspecto2" class="form-label">Aspecto 2</label>
    <input type="text" class="form-control txt-angel text-center" id="aspecto2" name="aspecto2" value="' . $usuario["Aspecto2"] . '" readonly>
  </div>
  <div class="mb-3">
    <label for="aspecto3" class="form-label">Aspecto 3</label>
    <input type="text" class="form-control txt-angel text-center" id="aspecto3" name="aspecto3" value="' . $usuario["Aspecto3"] . '" readonly>
  </div>';
        }
    }
    function ConsultarID()
    {
        $obj_conexion = new ConexionBD();
        $Conn = $obj_conexion->IniciarConexion();
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $consulta = "SELECT IDEstudiante FROM usuariosestudiantes WHERE NombreUsuario = '$correo' AND contrasena = '$contrasena'";
        $resultado = mysqli_query($Conn, $consulta);
        if ($resultado) {
            $usuario = mysqli_fetch_assoc($resultado);
            echo $usuario;
        }
    }
}
$obj_Consultas = new Consultas();
if (isset($_POST['Login'])) {
    $obj_Consultas->login();
}
if (isset($_POST['ConsultarID'])) {
    $obj_Consultas->ConsultarID();
}
if (isset($_POST['ConsultarCaracteristicas'])) {
    $obj_Consultas->ConsultarCaracteristicas();
}
if (isset($_POST['ConsultarDetalles'])) {
    $obj_Consultas->ConsultarDetalles();
}
?>