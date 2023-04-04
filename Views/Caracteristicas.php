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
            <div class="text-center">
                <div class="mb-3 item" style="width: 50%; margin: auto;">
                    <label for="txt-caracteristica" id="txt-caracteristica" class="form-label">Caracteristica</label>
                    <input type="text" class="form-control txt-angel" id="txt-caracteristica">
                </div>
                <div class="h4 pb-2 my-4 mx-5 text-black border-bottom border-danger text-center">
                    Ideas <i class="bi bi-lightbulb"></i>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="txt-caracteristica" id="txt-caracteristica" class="form-label">Idea 1</label>
                        <input type="text" class="form-control txt-angel" id="txt-caracteristica">
                    </div>
                    <div class="col mb-3">
                        <label for="txt-caracteristica" id="txt-caracteristica" class="form-label">Idea 2</label>
                        <input type="text" class="form-control txt-angel" id="txt-caracteristica">
                    </div>
                    <div class="col mb-3">
                        <label for="txt-caracteristica" id="txt-caracteristica" class="form-label">Idea 3</label>
                        <input type="text" class="form-control txt-angel" id="txt-caracteristica">
                    </div>
                </div>

            </div>
            <div class="table-responsive text-center">
                <table class="table table-bordered">
                    <thead>
                        <tr>
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
                        </tr>
                    </thead>
                    <tbody style="background-color: white;">
                        <tr>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label texto-verde" for="inlineRadio1">Positivo <i
                                            class="bi bi-plus-square"></i></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label texto-rojo" for="inlineRadio2">Negativo <i
                                            class="bi bi-dash-square"></i></label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label texto-verde" for="inlineRadio1">Positivo <i
                                            class="bi bi-plus-square"></i></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label texto-rojo" for="inlineRadio2">Negativo <i
                                            class="bi bi-dash-square"></i></label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label texto-verde" for="inlineRadio1">Positivo <i
                                            class="bi bi-plus-square"></i></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label texto-rojo" for="inlineRadio2">Negativo <i
                                            class="bi bi-dash-square"></i></label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label texto-verde" for="inlineRadio1">Positivo <i
                                            class="bi bi-plus-square"></i></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label texto-rojo" for="inlineRadio2">Negativo <i
                                            class="bi bi-dash-square"></i></label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label texto-verde" for="inlineRadio1">Positivo <i
                                            class="bi bi-plus-square"></i></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label texto-rojo" for="inlineRadio2">Negativo <i
                                            class="bi bi-dash-square"></i></label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label texto-verde" for="inlineRadio1">Positivo <i
                                            class="bi bi-plus-square"></i></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label texto-rojo" for="inlineRadio2">Negativo <i
                                            class="bi bi-dash-square"></i></label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Escribe aquí" id="exampleFormControlTextarea1"></textarea>
                <label for="exampleFormControlTextarea1">Comentario</label>
            </div>
            <div class="my-5">
                <button type="button" class="btn btn-danger">Cancelar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
            </div>

        </div>
    </div>
    <!-- Footer section -->
    <?php include("../Includes/Footer.php"); ?>
    <script>
        $('#btn-CerrarSesion').click(function () {
            window.location.href = "../Index.php";
        });
    </script>
    <script src="main.js"></script>
</body>

</html>