<?php
include "../../config.php";
include "../../app/ProductsController.php";
include_once "../../app/BrandsController.php";

?>
<!doctype html>
<html lang="en">

<head>
    <?php include "../layouts/head.php" ?>
</head>
<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <?php include "../layouts/sidebar.php" ?>
    <?php include "../layouts/navbar.php" ?>

    <div class="pc-container w-100">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                                <li class="breadcrumb-item" aria-current="page">Modificar orden</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Modificar orden</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-10">
                        <div class="card-header">
                            <h5>Información de la orden</h5>
                        </div>
                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label">Folio:</label>
                                <input type="number" class="form-control w-100" id="name" name="folio" placeholder="Ingresar folio" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Total:</label>
                                <input type="number" class="form-control w-100" id="name" name="total" placeholder="Ingresar total" required />
                            </div>
                            <div class="mb-0">
                                <label class="form-label">Esta pagado:</label>
                                <textarea class="form-control w-100" id="description" name="is_paid" placeholder="Esta pagado" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Cliente Id</label>
                                <input type="number" class="form-control w-100" id="keywords" name="client_id" placeholder="Cliente id" />
                            </div>
                            <div class="mb-0">
                                <label class="form-label">Direción id</label>
                                <textarea class="form-control w-100" id="features" name="address_id" placeholder="características" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Estado de la orden id: </label>
                                <input type="number" class="form-control w-100" id="keywords" name="order_status_id" placeholder="Estado de la orden" />
                            </div>
                            <div class="mb-0">
                                <label class="form-label">Tipo de pago id</label>
                                <textarea class="form-control w-100" id="features" name="payment_type_id" placeholder="tipo de pago" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Cupon Id</label>
                                <input type="number" class="form-control w-100" id="keywords" name="cupon_id" placeholder="Cupon id" />
                            </div>
                            <div class="mb-3">
                                <label for="presentations" class="form-label">Presentaciones</label>
                                <div id="presentations">
                                    <div class="presentation">
                                        <label for="presentations[0][id]" class="form-label">ID Presentación 1</label>
                                        <input type="text" class="form-control" name="presentations[0][id]" placeholder="ID Presentación 1" required>
                                        <label for="presentations[0][quantity]" class="form-label">Cantidad Presentación 1</label>
                                        <input type="number" class="form-control" name="presentations[0][quantity]" placeholder="Cantidad Presentación 1" required>
                                    </div>
                                    <div class="presentation">
                                        <label for="presentations[1][id]" class="form-label">ID Presentación 2</label>
                                        <input type="text" class="form-control" name="presentations[1][id]" placeholder="ID Presentación 2" required>
                                        <label for="presentations[1][quantity]" class="form-label">Cantidad Presentación 2</label>
                                        <input type="number" class="form-control" name="presentations[1][quantity]" placeholder="Cantidad Presentación 2" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-10">
                        <div class="card">
                            <div class="card-body text-end btn-page">
                                <button type="submit" class="btn btn-primary mb-0">Modificar orden </button>
                                <button type="button" class="btn btn-outline-secondary mb-0" onclick="window.location.href='../products/index.php'">Cancelar</button>
                                <input type="hidden" name="action" value="crear_producto">
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <?php include "../layouts/footer.php" ?>
    <?php include "../layouts/scripts.php" ?>
    <?php include "../layouts/modals.php" ?>
</body>

</html>