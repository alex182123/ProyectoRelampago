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
        <div class="container my-3 bg-light border border-black rounded">
            <div class="h4 pb-2 my-4 mx-5 text-black border-bottom border-primary text-center">
                Caracteristicas
            </div>
            <div class="text-center">
                <div class="mb-3">
                    <label for="txt-caracteristica" id="txt-caracteristica" class="form-label">Caracteristica</label>
                    <input type="text" class="form-control" id="txt-caracteristica">
                </div>
                <div class="h4 pb-2 my-4 mx-5 text-black border-bottom border-danger text-center">
                    Ideas <i class="bi bi-lightbulb"></i>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="txt-caracteristica" id="txt-caracteristica"
                            class="form-label">Idea 1</label>
                        <input type="text" class="form-control" id="txt-caracteristica">
                    </div>
                    <div class="col mb-3">
                        <label for="txt-caracteristica" id="txt-caracteristica"
                            class="form-label">Idea 2</label>
                        <input type="text" class="form-control" id="txt-caracteristica">
                    </div>
                    <div class="col mb-3">
                        <label for="txt-caracteristica" id="txt-caracteristica"
                            class="form-label">Idea 3</label>
                        <input type="text" class="form-control" id="txt-caracteristica">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
    <!-- Footer section -->
    <?php include("../Includes/Footer.php"); ?>
    <script src="main.js"></script>
</body>

</html>