<!doctype html>
<html lang="en">
<!-- [Head] start -->

<?php
include "../../config.php";

?>

<head>
    <?php include "../layouts/head.php" ?>

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">

    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    <?php include "../layouts/sidebar.php" ?>

    <?php include "../layouts/navbar.php" ?>


    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Ui kit</a></li>
                                <li class="breadcrumb-item" aria-current="page">Cupones</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Cupones</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <a class="btn btn-outline-secondary shadow-sm rounded-pill px-4" ">Agregar Cupon</a>


            <!-- [ Main Content ] start -->
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-xxl-4">
                        <div class="card shadow border-0">
                            <div class="card-header bg-primary text-white text-center">
                                <h4 class="mb-0">Nombre del Plan</h4>
                                <p class="mb-0">Código: <strong>CODE123</strong></p>
                            </div>
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <div class="badge bg-info text-white fs-5">10% de Descuento</div>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Descuento de cantidad: 10%</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Cantidad mínima requerida: 5</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Productos mínimos requeridos: 2</li>
                                    <li><i class="bi bi-calendar-fill text-primary me-2"></i> Desde: 01/01/2024</li>
                                    <li><i class="bi bi-calendar-fill text-primary me-2"></i> Hasta: 31/12/2024</li>
                                    <li><i class="bi bi-tags-fill text-warning me-2"></i> Tipo de cupon: Descuento fijo</li>
                                </ul>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-primary flex-fill">Detalles</button>
                                    <button class="btn btn-secondary flex-fill">Editar</button>
                                    <button class="btn btn-danger flex-fill">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [ Main Content ] end -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        </div>
    </div>




    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <?php include "../layouts/footer.php" ?>

    <?php include "../layouts/scripts.php" ?>

    <?php include "../layouts/modals.php" ?>



</body>
<!-- [Body] end -->

</html>