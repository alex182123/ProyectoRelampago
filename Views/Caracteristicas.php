<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../CSS/Styles.css">
    <title>Caracteristicas | Proyecto Relampago</title>
</head>

<body>
    <!-- Header include -->
    <?php include("../Includes/Header.php") ?>
    <div class="container-fluid">
        <div class="container my-3 bg-light border border-black rounded text-center">
            <div class="h4 pb-2 my-4 mx-5 text-black border-bottom border-primary ">
                Caracteristicas
            </div>
            <div class="row">
                <div class="col-5 border-end border-primary" style="margin: auto;">
                    <div class="text-center">
                        <div class="mb-3">
                            <label for="txt-caracteristica" id="txt-caracteristica"
                                class="form-label">Caracteristica</label>
                            <input type="text" class="form-control txt-angel" id="caracteristica">
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="text-center">
                        <div class="mb-3">
                            <label for="txt-caracteristica" id="txt-caracteristica" class="form-label">Idea 1</label>
                            <input type="text" class="form-control txt-angel" id="txt-idea-1">
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="mb-3">
                            <label for="txt-caracteristica" id="txt-caracteristica" class="form-label">Idea 2</label>
                            <input type="text" class="form-control txt-angel" id="txt-idea-2">
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="mb-3">
                            <label for="txt-caracteristica" id="txt-caracteristica" class="form-label">Idea 3</label>
                            <input type="text" class="form-control txt-angel" id="txt-idea-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-3">
                <button type="button" id="btn-cancelar" class="btn btn-danger">Cancelar</button>
                <button type="button" id="btn-siguiente" class="btn btn-primary">Siguiente</button>
            </div>
        </div>
        <!-- Footer section -->
        <?php include("../Includes/Footer.php"); ?>
        <script>
            $('#btn-CerrarSesion').click(function () {
                window.location.href = "../Index.php";
            });
            $('#btn-cancelar').click(function () {
                const urlParams = new URLSearchParams(window.location.search);
                const id = urlParams.get('ID');
                window.location.href = "Index.php?ID=" + id;
            });
            $('#btn-siguiente').click(function () {
                const urlParams = new URLSearchParams(window.location.search);
                const id = urlParams.get('ID');
                var caracteristica = $("#caracteristica").val().trim();
                var idea1 = $("#txt-idea-1").val().trim();
                var idea2 = $("#txt-idea-2").val().trim();
                var idea3 = $("#txt-idea-3").val().trim();
                    if (caracteristica === "" || idea1 === "" || idea2 === "" || idea3 === "") {
                        Swal.fire({
                            icon: 'error',
                            title: 'Por favor, complete todos los campos.!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    } else {
                        window.location.href = "../Views/Factores.php?ID=" + id + "&Carac=" + caracteristica + "&Idea1=" + idea1 + "&idea2=" + idea2 + "&idea3=" + idea3;
                    }
                });
        </script>
        <script src="main.js"></script>
</body>

</html>