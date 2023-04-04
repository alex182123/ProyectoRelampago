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
    <!-- Contenedor principal -->
    <div class="container-fluid">
        <div class="container my-3 bg-light border border-black rounded">
            <div class="h4 pb-2 my-4 text-dark border-bottom border-dark">
                Vista PESTEL
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" id="btn-AgregarIdea">
                    <i class="bi bi-plus-circle"></i> Agregar Idea
                </button>
            </div>
            <div>
                <div class="table-responsive text-center">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                <h6>
                                <i class="bi bi-list-ul"></i>
                                    </h6>
                                    
                                    <h6>
                                        Factores
                                    </h6>
                                </th>
                                <th>
                                    <h6>
                                    <i class="bi bi-search"></i>
                                    </h6>
                                    <h6>
                                        Clasificacion del factor
                                    </h6>
                                </th>
                                <th style="background-color: #FFE699;">
                                    <h6>
                                        <i class="bi bi-building"></i>
                                    </h6>
                                    <h6>
                                        Politico
                                    </h6>
                                </th>
                                <th style="background-color: #F7CE90;">
                                    <h6>
                                        <i class="bi bi-cash"></i>
                                    </h6>
                                    <h6>
                                        Economico
                                    </h6>
                                </th>
                                <th style="background-color: #E7B8B8;">
                                    <h6>
                                        <i class="bi bi-people"></i>
                                    </h6>
                                    <h6>
                                        Social
                                    </h6>
                                </th>
                                <th style="background-color: #BDD7EE;">
                                    <h6>
                                        <i class="bi bi-cpu"></i>
                                    </h6>
                                    <h6>
                                        Tecnologico
                                    </h6>
                                </th>
                                <th style="background-color: #B6D7A8;">
                                    <h6>
                                        <i class="bi bi-tree"></i>
                                    </h6>
                                    <h6>
                                        Ecologico
                                    </h6>
                                </th>
                                <th style="background-color: #F5DEB3;">
                                    <h6>
                                        <i class="bi-file-earmark-text"></i>
                                    </h6>
                                    <h6>
                                        Legal
                                    </h6>
                                </th>
                                <th>
                                    <h6>
                                        <i class="bi bi-chat-left-text"></i>
                                    </h6>
                                    <h6>
                                        Comentario
                                    </h6>
                                </th>
                                <th>
                                    <h6>
                                        <i class="bi bi-gear-wide-connected"></i>
                                    </h6>
                                    <h6>
                                        Acciones
                                    </h6>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer section -->
    <?php include("../Includes/Footer.php"); ?>
    <script>
        $('#btn-CerrarSesion').click(function () {
            window.location.href = "../Index.php";
        });
        $('#btn-AgregarIdea').click(function () {
            window.location.href = "../Views/Caracteristicas.php";
        });
    </script>
    <script src="main.js"></script>
</body>

</html>