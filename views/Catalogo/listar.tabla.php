<?php require_once '../../views/Templates/HeadBootstrap.php' ?>

<meta name="keywords" content="videojuegos,catalogo,juegos" />
<link rel="stylesheet" href="../../assets/css/BasurtoEdgar.css" />
<meta name="description" content="Catalogo" />

<title>Catálogo - ArkGames</title>
</head>

<body id="bodyTemp">

    <!-------------------------------------------------MENU---------------------------------------->

    <?php

    require_once '../Templates/navBarBootstrap.php'
    ?>

    <!------------------------------------------------------------------------------------------>

    <main class="main p-5 mx-3">

        <div class="container-fluid card shadow">

            <div class="row card-header">
                <div class="col-6">
                    <h1 class="title">Catálogo de ArkGames</h1>
                </div>
                <div class="col-6">
                    <div class="row text-end py-2">
                        <div class="col">
                            <a class="btn btn-secondary" href="?c=productos&a=index_cuadricula">
                                <i class="fa-solid fa-circle-plus"></i> Cuadricula</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-secondary" href="index.php">
                                <i class="fa-solid fa-circle-plus"></i> Tabla</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="?c=productos&a=nuevo">
                                <i class="fa-solid fa-circle-plus"></i> Agregar nuevo</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-striped table-light table-bordered table-hover" width="100%" cellspacing="0">

                        <thead class="table-light">
                            <th scope="col">Id</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">-</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($resultados as $producto) {
                            ?>

                                <tr>
                                    <th scope="row"><?php echo $producto->id_producto ?></th>
                                    <td><img style="height:50px" src="data:image/jpg;base64,<?php echo base64_encode($producto->url_imagen) ?>" alt="<?php echo $producto->nombre ?>"></td>

                                    <td><?php echo $producto->nombre ?></td>
                                    <td>$<?php echo $producto->precio ?></td>
                                    <td><?php echo $producto->categoria->nombre_categoria ?></td>
                                    <td>
                                        <a href="?c=productos&a=nuevo&id=<?php echo $producto->id_producto ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=productos&a=delete&id=<?php echo $producto->id_producto ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>


    <!-------------------------------------------------FOOTER---------------------------------------->


    <?php
    require_once '../Templates/footerBootstrap.php'
    ?>


    <!----------------------------------------------------------------------------------------------->


</body>

</html>