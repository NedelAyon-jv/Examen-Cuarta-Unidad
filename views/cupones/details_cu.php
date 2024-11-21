<!doctype html>
<html lang="en">

<!-- [Head] -->
<?php
include "../../config.php";
include "../../app/clientController.php";
?>

<head>
    <?php include "../layouts/head.php"; ?>
</head>

<!-- [Body] -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
    data-pc-theme="light">

    <!-- [Pre-loader] -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <!-- [Sidebar and Navbar] -->
    <?php
    include "../layouts/sidebar.php";
    include "../layouts/navbar.php";
    ?>

    <!-- [Main Container] -->
    <div class="pc-container py-4">
        <div class="pc-content">
            <div class="row w-100 g-4">

                <!-- [Client Card] -->
                <div class="col-sm-12">
                    <div class="card shadow-lg border-0">
                        <div class="card-body text-center p-4 bg-primary text-white rounded-top">
                            <h3 class="fw-bold">Nombre del cupón</h3>
                            <p class="text-light mb-1">Código del cupón</p>
                        </div>
                        <div class="card-body text-start p-4 bg-light">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Porcentaje a descontar:</strong> 100%</li>
                                <li class="list-group-item"><strong>Monto a descontar:</strong> $500</li>
                                <li class="list-group-item"><strong>Cantidad mínima requerida:</strong> 100</li>
                                <li class="list-group-item"><strong>Productos mínimos requeridos:</strong> 4</li>
                                <li class="list-group-item"><strong>Validez:</strong> Del 01/01/2024 al 31/12/2024</li>
                                <li class="list-group-item"><strong>Máximo de usos:</strong> 2</li>
                                <li class="list-group-item"><strong>Estado:</strong> Baja California Sur</li>
                                <li class="list-group-item"><strong>Tipo de cupón:</strong> Cupón de descuento</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- [Orders Card] -->
                <div class="col-md-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-secondary text-white">
                            <h5 class="mb-0">Órdenes</h5>
                        </div>
                        <div class="card-body p-4">
                            <p><strong>Folio:</strong> 5</p>
                            <p><strong>Total:</strong> $200</p>
                            <p><strong>Cliente:</strong> Juan Pérez</p>
                            <p><strong>Dirección:</strong> Calle 123, Ciudad</p>
                        </div>
                    </div>
                </div>

                <!-- [Widgets Card] -->
                <div class="col-md-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-warning text-dark">
                            <h5 class="mb-0">Widgets Totales de Compras</h5>
                        </div>
                        <div class="card-body text-center p-4">
                            <h1 class="display-4 fw-bold text-success">0</h1>
                            <p class="text-muted">Total de Widgets Comprados</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- [Footer and Scripts] -->
        <?php
        include "../layouts/footer.php";
        include "../layouts/scripts.php";
        include "../layouts/modals.php";
        ?>

</body>

</html>
