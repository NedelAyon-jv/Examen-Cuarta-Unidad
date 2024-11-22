<?php
include "../../config.php";
include "../../app/ticketController.php";

$ticketController = new ticketController();
$cupon = $ticketController->getTicket($_GET['id']);

?>
<!doctype html>
<html lang="en">

<!-- [Head] -->
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
                            <h3 class="fw-bold"><?php echo $cupon->name ?></h3>
                            <p class="text-light mb-1">Código: <strong><?php echo $cupon->code ?></strong></p>
                        </div>
                        <div class="card-body text-start p-4 bg-light">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Porcentaje a descontar:</strong> <?php echo $cupon->percentage_discount ?>%</li>
                                <li class="list-group-item"><strong>Monto a descontar:</strong> $<?php echo $cupon->amount_discount ?></li>
                                <li class="list-group-item"><strong>Cantidad mínima requerida:</strong><?php echo $cupon->min_amount_required ?></li>
                                <li class="list-group-item"><strong>Productos mínimos requeridos:</strong><?php echo $cupon->min_product_required ?></li>
                                <li class="list-group-item"><strong>Validez:</strong> Del <?php echo $cupon->start_date ?> al <?php echo $cupon->end_date ?></li>
                                <li class="list-group-item"><strong>Máximo de usos:</strong> <?php echo $cupon->max_uses ?></li>
                                <li class="list-group-item"><strong>Estado:</strong><?php
                                                                                    if ($cupon->status == 1) {
                                                                                        echo "Activo";
                                                                                    } elseif ($cupon->status == 0) {
                                                                                        echo "Inactivo";
                                                                                    } else {
                                                                                        echo "Estado desconocido";
                                                                                    }
                                                                                    ?></li>
                                <li class="list-group-item"><strong>Tipo de cupón:</strong><?php echo is_null($cupon->couponable_type) ? "No definido" : $cupon->couponable_type; ?></li>
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
                        <?php if (isset($cupon->orders) && count($cupon->orders) > 0): ?>
                            <?php foreach ($cupon->orders as $order): ?>
                                <ul class="list-group list-group-flush border">
                                    
                                    <p><strong>Folio:</strong> <?php echo $order->folio ?></p>
                                    <p><strong>Total:</strong> $<?php echo $order->total ?></p>
                                    <p><strong>Cliente ID:</strong> <?php echo $order->client_id?></p>
                                    <p><strong>Dirección ID:</strong> <?php echo $order->address_id ?></p>                   
                            </ul>
                            <?php endforeach; ?>
                            <?php else: ?>
                                <p>No hay órdenes asociadas a este cupón.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- [Widgets Card] -->
                <div class="col-md-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-warning text-dark">
                            <h5 class="mb-0">Widgets Totales de Descuentos</h5>
                        </div>
                        <div class="card-body text-center p-4">
                            <h1 class="display-4 fw-bold text-success">$0</h1>
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