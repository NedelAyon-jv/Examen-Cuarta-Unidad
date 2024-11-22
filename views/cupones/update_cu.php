<!doctype html>
<html lang="en">
<!-- [Head] start -->
<?php
include "../../config.php";
include_once "../../app/ticketController.php";
$ticketController = new ticketController();
$cupon = $ticketController->getTicket($_GET['id']);

?>

<head>
    <?php include "../layouts/head.php" ?>
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
    data-pc-theme="light">
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
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->

    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <section class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Forms</a></li>
                                <li class="breadcrumb-item" aria-current="page">Modificar cupon</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Modificar cupon</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->


            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ form-element ] start -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Llena cada uno de los campos con lo que se te indica:</h5>
                        </div>
                        <div class="card-body">
                        <form id="editForm" method="POST" action="../../app/ticketController.php">
                                <input type="text" hidden name="action" value="update_ticket">
                                <input type="text" hidden name="id" value="<?= $cupon->id ?>">
                                <!-- Nombre(s) y Apellido(s) -->
                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Nombre del cupon:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Ingrese el nombre del cupon" name="name" id="nameEdit"/ value="<?= $cupon->name ?>" />
                                        <small class="form-text text-muted">Ingrese el nombre del cupon</small>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Código del cupon:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Codigo del cupon" name="code" id="codeEdit" value="<?= $cupon->code ?>" />
                                        <small class="form-text text-muted">Codigo del cupon</small>
                                    </div>
                                </div>

                                <!-- Correo electrónico -->
                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Porcentaje de descuento:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Ingresar el Porcentaje de descuento " name="percentage" id="percentageDiscountEdit" value="<?= $cupon->percentage_discount ?>" />
                                        <small class="form-text text-muted">Ingresar el Porcentaje de descuento</small>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Monto minimo requerido:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Ingresa el monto minimo requerido" name="min_amount"   id="minAmountRequiredEdit" value="<?= $cupon->min_amount_required ?>"/>
                                        <small class="form-text text-muted">Ingresa el monto minimo requerido</small>
                                    </div>
                                </div>

                                <!-- Campos adicionales -->
                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Monto maximo requerido:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Ingresa el monto máximo requerido" name="max_product"   id="minProductRequiredEdit" value="<?= $cupon->min_product_required ?>" />
                                        <small class="form-text text-muted">Monto máximo requerido</small>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Contador de usos:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Ingresa el contador de usos" name="count_uses" id="count_usesEdit" value="<?= $cupon->count_uses ?>" />
                                        <small class="form-text text-muted">Contador de usos</small>
                                    </div>
                                </div>

                                <!-- Fechas -->
                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Fecha de inicio:</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="date" class="form-control" placeholder="Ingresa la fecha de inicio" name="start_date"  id="startDateEdit" value="<?= $cupon->start_date ?>" />
                                        </div>
                                        <small class="form-text text-muted">Ingresa la fecha de inicio</small>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Fecha de finalización:</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="date" class="form-control" placeholder="Ingresa la fecha de finalización" name="end_date"  id="endDateEdit" value="<?= $cupon->end_date ?>"/>
                                        </div>
                                        <small class="form-text text-muted">Ingresa la fecha de finalización</small>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Usos maximos:</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Ingresa la cantidad de usos maximos" name="max_uses" id="max_usesEdit" value="<?= $cupon->max_uses ?>" />
                                        </div>
                                        <small class="form-text text-muted">Ingresa la cantidad de usos maximos</small>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Valido solo la primera compra:</label>
                                    <div class="col-lg-4">
                                        <select class="form-select" id="validFirstPurchase" name="validity" value="<?= $cupon->validity ?>">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                        <small class="form-text text-muted">Ingresa si es valido solo la primera compra</small>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Estado:</label>
                                    <div class="col-lg-4">
                                        <select class="form-select" id="couponStatus" name="status" id="statusEdit" value="<?= $cupon->status ?>">
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                        </select>
                                        <small class="form-text text-muted">Estado del cupon: </small>
                                    </div>
                                </div>

                                <!-- Botones -->
                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-primary me-2">Modificar cupon</button>
                                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- [ form-element ] end -->
            </div>
    </section>
    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <?php include "../layouts/footer.php" ?>

    <?php include "../layouts/scripts.php" ?>

    <?php include "../layouts/modals.php" ?>


</body>
<!-- [Body] end -->

</html>