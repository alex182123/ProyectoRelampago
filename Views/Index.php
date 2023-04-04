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
                                        <i class="bi bi-gear-wide-connected"></i>
                                    </h6>
                                    <h6>
                                        Acciones
                                    </h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody id='cuerpo'>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #A5C0ED;">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detalles</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="modbody" class="text-center">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('ID');
            window.location.href = "../Views/Caracteristicas.php?ID=" + id;
        });
        $(document).ready(function () {
            setInterval(function () {
                const urlParams = new URLSearchParams(window.location.search);
                const id = urlParams.get('ID');
                $.ajax({
                    url: '../Class/Database/Consultas.php',
                    method: 'POST',
                    data: {
                        ID: id,
                        ConsultarCaracteristicas: '1'
                    },
                    success: function (data) {
                        $('#cuerpo').html(data);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            }, 5000);
        });
    </script>
    <script src="main.js"></script>
</body>

</html>