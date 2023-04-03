function Login() {
    var correo = $('#txtcorreo').val();
    var contrasenia = $('#txtcontrasenia').val();

    // Realizar la petición AJAX
    $.ajax({
        type: 'POST',
        url: 'Class/Database/Consultas.php',
        data: {
            correo: correo,
            contrasena: contrasenia,
            Login: "1"
        },
        success: function (response) {
            // La respuesta de la petición se almacena en la variable "response"

            // Puedes hacer lo que necesites con la respuesta, como redirigir a otra página
            if (response == "1") {
                Swal.fire({
                    icon: 'success',
                    title: 'Bienvenido!',
                    showConfirmButton: false
                })
                setTimeout(function () {
                    window.location.href = "Views/Index.php";
                }, 3000);

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Nombre de usuario y/o contraseña incorrectos.',
                })
            }
        },
        error: function () {
            // Manejo de errores
        }
    });
}
function registrar() {
    var nombre = $('#txtNombre').val();
    var apellidos = $('#txtApellidos').val();
    var usuario = $('#txtNombreUsuario').val();
    var contrasena = $('#txtcontrasena').val();

    // Validar que ninguno de los inputs esté vacío
    if (nombre == "" || apellidos == "" || usuario == "" || contrasena == "") {
        Swal.fire({
            icon: 'error',
            title: 'Por favor, complete todos los campos.!',
            showConfirmButton: false,
            timer: 1500
        })
    }else{
        $.ajax({
            type: 'POST',
            url: 'Class/Database/Insertar.php',
            data: {
                nombre: nombre,
                apellidos: apellidos,
                usuario: usuario,
                contrasena: contrasena,
                Registrar: "1"
            },
            success: function(response) {
                // La respuesta de la petición se almacena en la variable "response"
                Swal.fire({
                    icon: 'success',
                    title: 'Registro Exitoso!',
                    showConfirmButton: false
                })
                setTimeout(function () {
                    window.location.href = "./Index.php";
                }, 3000);
                // Puedes hacer lo que necesites con la respuesta, como redirigir a otra página
            },
            error: function() {
                // Manejo de errores
            }
        });
    }
}
$('#btn-login').click(function () {
    Login();
});
$('#btn-registrar').click(function () {
    registrar();
});