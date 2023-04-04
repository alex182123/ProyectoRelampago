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
                Factores
            </div>
            <div class="row">
                <div class="col-4 border-end border-primary" style="margin: auto;">
                    <div class="text-center">
                        <div class="mb-3">
                            <label for="txt-caracteristica" id="txt-caracteristica"
                                class="form-label">Idea</label>
                                <input type="text" class="form-control txt-angel" id="txt-caracteristica">
                        </div>
                    </div>
                </div>
                <div class="col-4 border-end border-primary">
                    <div class="text-center">
                        <div class="mb-3">
                            <label for="txt-caracteristica" id="txt-caracteristica" class="form-label">Aspecto 1</label>
                            <input type="text" class="form-control txt-angel" id="Aspecto1">
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="mb-3">
                            <label for="txt-caracteristica" id="txt-caracteristica" class="form-label">Aspecto 2</label>
                            <input type="text" class="form-control txt-angel" id="Aspecto2">
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="mb-3">
                            <label for="txt-caracteristica" id="txt-caracteristica" class="form-label">Aspecto 3</label>
                            <input type="text" class="form-control txt-angel" id="Aspecto3">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="select1" class="form-label">Politico <i class="bi bi-building"></i></label>
                                <select class="form-select" id="AspecPolitico">
                                    <option value=" ">Seleccionar</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="select2" class="form-label">Economico <i class="bi bi-cash"></i></label>
                                <select class="form-select" id="AspecEconomico">
                                    <option value=" ">Seleccionar</option>
                                    <option value="Positivo"> Positivo</option>
                                    <option value="Negativo"> Negativo</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="select3" class="form-label">Social <i class="bi bi-people"></i></label>
                                <select class="form-select" id="AspecSocial">
                                    <option value=" ">Seleccionar</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="select4" class="form-label">Tecnologico <i class="bi bi-cpu"></i></label>
                                <select class="form-select" id="AspecTecno">
                                    <option value=" ">Seleccionar</option>
                                    <option value="Positivo"> Positivo</option>
                                    <option value="Negativo"> Negativo</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="select5" class="form-label">Ecologico <i class="bi bi-tree"></i></label>
                                <select class="form-select" id="AspecEcologico">
                                    <option value=" ">Seleccionar</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="select6" class="form-label">Legal <i
                                        class="bi-file-earmark-text"></i></label>
                                <select class="form-select" id="AspecLegal">
                                    <option value=" ">Seleccionar</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo"> Negativo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-3">
                <button type="button" id="volver" class="btn btn-success">Volver</button>
                <button type="button" id="btnregistrar" class="btn btn-primary">Registrar</button>
            </div>
        </div>
        <!-- Footer section -->
        <?php include("../Includes/Footer.php"); ?>
        <script>
            $('#btn-CerrarSesion').click(function () {
                window.location.href = "../Index.php";
            });
            $('#volver').click(function () {
                const urlParams = new URLSearchParams(window.location.search);
                const id = urlParams.get('ID');
                window.location.href = "Caracteristicas.php?ID=" + id;
            });
            
        </script>
        <script src="main.js"></script>
</body>

</html>