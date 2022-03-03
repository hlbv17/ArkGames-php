<?php require_once '../../views/Templates/HeadBootstrap.php' ?>


<link rel="stylesheet" href="../../assets/css/BernalHelen.css" />


<title>CRUD</title>
</head>

<body id="bodyTemp">
    <header>
        <?php
        require_once '../Templates/navBarBootstrap.php'
        ?>
    </header>
    <?php
    include_once '../../config/conexionPDO.php';
    $sql = "select * from suscripcion ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    ?>
    <main class="main p-5 mx-3">

        <div class="container-fluid card shadow">

            <div class="card-header row">
                <div class="col-md-7">
                    <h2>Consultar Suscripciones a Newsletter</h2>
                </div>
                <div class="col-md-5 text-end"><a class="btn btn-success justify-center" href="frm_BernalHelen.php">Agregar <i class="fa-solid fa-circle-plus fa-lg"></i></a></div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-light table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Temas</th>
                                <th>Dispositivos</th>
                                <th>Frecuencia</th>
                                <th>Discord</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $filas = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($filas as $fila) {
                                $id = $fila['id_suscripcion'];
                            ?>
                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $fila['email'] ?></td>
                                    <td><?php echo $fila['temas'] ?></td>
                                    <td><?php echo $fila['dispositivos'] ?></td>
                                    <td><?php echo $fila['frecuencia'] ?></td>
                                    <td><?php echo $fila['discord'] ?></td>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <a class="btn btn-primary" href="editar_noticias.php?id=<?php echo $fila['id_suscripcion'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                            </div>
                                            <div class="col">
                                                <a class="btn btn-danger" href="eliminar_noticias.php?id=<?php echo $fila['id_suscripcion'] ?>"><i class="fa-solid fa-trash-can"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
    <?php
    require_once '../Templates/footerBootstrap.php'
    ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->
</body>

</html>