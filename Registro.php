<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="CSS/Login.css"/>
    <title>Registro</title>
</head>
<body>
    <div class="contentPage">
    <form method="post">
        <div class="contenedor">
            <div class="contenedor-titulo"> 
                <h1 class="Titulo">Registrarse</h1>
            </div>
            
            <div class="user-details">
            <input type="text" name="txtcorreo" id="txtNombre" value="" placeholder="Nombre" required/>
                <input type="text" name="txtcorreo" id="txtApellidos" value="" placeholder="Apellidos" required/>
                <input type="text" name="txtusuario" id="txtNombreUsuario" value="" placeholder="Nombre Usuario" required/>
                <input type="password" name="txtcontrasenia"  id="txtcontrasena" placeholder="Contraseña" required/>
            </div>

            <input type="button" name="btnRegistrar" id="btn-registrar" value="Registrar" class="button">
            <div class="creacion-cuenta">
                <a href="Index.php">Iniciar sesión</a>
            </div>
        </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>