<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Catalogo" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="videojuegos,catalogo,juegos" />
    <link rel="stylesheet" href="../../assets/css/master3.css" />
    <link rel="stylesheet" href="../../assets/css/BasurtoEdgar.css" />
    <link rel="icon" href="../../assets/img/logo.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .panelFormulario {
            padding: 20px 5%;
            margin: 50px auto;
            border-radius: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Catálogo - ArkGames</title>
</head>

<body class="container py-5 my-3">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="home" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
        </symbol>
    </svg>


    <!-------------------------------------------------MENU---------------------------------------->


    <?php

    require_once '../Templates/navBarBoostrap.php'
    ?>




    <!------------------------------------------------------------------------------------------>



    <div class="container-sm bg-light panelFormulario border">


        <h2 class="title mb-4">Agregar Producto</h2>


        <div>
            <form method="post" action="../../controller/ProductosControlador.php">

                <div class="row mb-4">
                    <div class="col-sm-8">

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nombre:</label>
                            <div class="col-sm-9">
                                <input class="form-control form-control-sm" type="text" name="txtNombre">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Precio:</label>
                            <div class="col-sm-9">
                                <input class="form-control form-control-sm" type="number" placeholder="0.0" step="0.01" min="0" max="1000" name="txtPrecio">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Añadir imagen:</label>
                            <div class="col-sm-9">
                                <input class="form-control form-control-sm" name="archivo" id="archivo" type="file" />
                            </div>
                        </div>



                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Categoría:</label>
                            <div class="col-sm-9">
                                <select class="form-select form-control-sm mb-3" aria-label=".form-select-sm example" name="selectCategoria" required>
                                    <option disabled selected> --Seleccione una categoria-- </option>
                                    <?php
                                    require_once '../../controller/CategoriasController.php';

                                    $cont = new CategoriasController();
                                    $lista = $cont->index();

                                    foreach ($lista as $categoria) {
                                    ?>
                                        <option value="<?php echo $categoria->Id_categoria ?>"><?php echo $categoria->Nombre_categoria ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 border rounded">
                        <div>VISTA PREVIA</div>
                    </div>
                </div>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="btn btn-primary mb-4" type="submit">Agregar</button>
                </div>
            </form>
        </div>

    </div>
    <!-------------------------------------------------FOOTER---------------------------------------->


    <?php
    require_once '../Templates/footerBoostrap.php'
    ?>


    <!----------------------------------------------------------------------------------------------->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>