<?php

include "../../config.php";
include "../../app/clientController.php";
$clientController = new clientController();
$client = $clientController->getCliente($_GET['id']);

?>
<!doctype html>
<html lang="en">
<head>
    <?php
    include "../layouts/head.php";
    ?>
</head>


<!-- [Head] -->

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

                <div class="col-sm-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body text-center p-4">
                            <img class="rounded-circle img-fluid wid-90 mb-3" src="<?= $client->avatar ?>" alt="Avatar"
                                onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=<?php echo urlencode($client->name); ?>&size=256&background=random&color=fff';" />
                            <h3 class="mb-2"><?= $client->name ?></h3>
                            <p class="text-muted mb-2"><?= $client->email ?></p>
                            <p><strong>Teléfono:</strong> <?= $client->phone_number ?></p>
                            <p><strong>Membresia:</strong> <?php
                                                            echo isset($client->is_suscribed)
                                                                ? ($client->is_suscribed == 0 ? "No hay suscripción" : ($client->is_suscribed == 1 ? "Mensual" : ($client->is_suscribed == 2 ? "Anual" : "Desconocido")))
                                                                : "No hay suscripción";
                                                            ?></p>
                        </div>
                    </div>
                </div>
                <div class=" row">
                    <!-- [ sample-page ] start -->
                    <div class="col-sm-12">
                        <div class="card table-card">
                            <div class="card-body">
                                <!-- Botón para añadir producto -->
                                <div class="text-end p-sm-4 pb-sm-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="catalogType">Direcciones:</label>
                                        </div>
                                    </div>

                                    <!-- Tabla de productos -->
                                    <div class="table-responsive">
                                        <table class="table table-hover tbl-product" id="pc-dt-simple">
                                            <thead>
                                                <!-- Filtro por tipo de catálogo -->


                                                <!-- Encabezados de la tabla -->
                                                <tr>
                                                    <th class="text-end">ID</th>
                                                    <th class="text-center">Calle y Numero</th>
                                                    <th class="text-center">Código postal</th>
                                                    <th class="text-center">Ciudad</th>
                                                    <th class="text-center">Estado</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php if (isset($client->addresses) && count($client->addresses)): ?>
                                                    <?php foreach ($client->addresses as $address): ?>
                                                        <!-- Producto -->
                                                        <tr>
                                                            <td class="text-end">7</td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <h6 class="mb-1 text-center">
                                                                            <?= htmlspecialchars($address->street_and_use_number) ?>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <?= htmlspecialchars($address->postal_code) ?></td>
                                                            <td class="text-center"><?= htmlspecialchars($address->city) ?></td>

                                                            <td class="text-center">
                                                                <?= htmlspecialchars($address->province) ?>

                                                            </td>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ sample-page ] end -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Nivel y Órdenes</h5>
                        </div>
                        <div class="card-body text-start p-4">
                            <p><strong>Nivel:</strong><?php
                                                        echo isset($client->level->name) && !empty($client->level->name)
                                                            ? $client->level->name
                                                            : "No se encontró";
                                                        ?></p>
                            <p><strong>Órdenes:</strong></p>
                            <?php if (isset($client->orders) && count($client->orders)): ?>
                                <?php foreach ($client->orders as $order): ?>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                        <li class="list-group-item"><strong> Folio: </strong><?= htmlspecialchars($order->folio) ?><br>
                                            <strong> Total: </strong>$<?= number_format($order->total, 2) ?><br>
                                            <strong> Estado: </strong><?php
                                                                        switch ($order->order_status_id) {
                                                                            case 1:
                                                                                echo "Pendiente de pago";
                                                                                break;
                                                                            case 2:
                                                                                echo "Pagada";
                                                                                break;
                                                                            case 3:
                                                                                echo "Enviada";
                                                                                break;
                                                                            case 4:
                                                                                echo "Abandonada";
                                                                                break;
                                                                            case 5:
                                                                                echo "Pendiente de enviar";
                                                                                break;
                                                                            case 6:
                                                                                echo "Cancelada";
                                                                                break;
                                                                            default:
                                                                                echo "Estado desconocido";
                                                                                break;
                                                                        }
                                                                        ?>

                                        </li>
                                    </ul>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>No se encontraron órdenes.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Widgets Totales de Compras</h5>
                        </div>
                        <div class="card-body text-center p-4">
                            <h1 class="display-4 mb-3">Total de Widgets</h1>
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