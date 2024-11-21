<!doctype html>
<html lang="en">
<!-- [Head] start -->
<?php
include "../../config.php";
include_once "../../app/userController.php";
$userController = new userController();
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
                            <form method="POST" action="../../app/userController.php" enctype="multipart/form-data">
                                <!-- Nombre(s) y Apellido(s) -->
                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Nombre del cupon:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Ingrese el nombre del cupon" name="name" />
                                        <small class="form-text text-muted">Ingrese el nombre del cupon)</small>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Código del cupon:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Codigo del cupon" name="lastname" />
                                        <small class="form-text text-muted">Codigo del cupon)</small>
                                    </div>

                                </div>


                                <!-- Correo electrónico -->
                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Porcentaje de descuento:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Ingresar el Porcentaje de descuento " name="email" />
                                        <small class="form-text text-muted">Ingresar el Porcentaje de descuento</small>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Monto minimo requerido:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Ingresa el monto minimo requerido" name="phone_number" />
                                        <small class="form-text text-muted">Ingresa el monto minimo requerido</small>
                                    </div>
                                </div>

                                <!-- Contraseña -->
                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Fecha de inicio:</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Ingresa la fecha de inicio" name="text" />
                                        </div>
                                        <small class="form-text text-muted">Ingresa la fecha de inicio</small>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Fecha de finalización:</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Ingresa la fecha de finalización" name="text" />
                                        </div>
                                        <small class="form-text text-muted">Ingresa la fecha de finalización</small>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Usos maximos:</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Ingresa la cantidad de usos maximos" name="text" />
                                        </div>
                                        <small class="form-text text-muted">Ingresa la cantidad de usos maximos</small>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Valido solo la primera compra:</label>
                                    <div class="col-lg-4">
                                        <select class="form-select" id="validFirstPurchase" name="validFirstPurchase">
                                            <option value="1">Sí</option>
                                            <option value="0">No</option>
                                        </select>
                                        <small class="form-text text-muted">Ingresa si es valido solo la primera compra</small>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Estado:</label>
                                    <div class="col-lg-4">
                                        <select class="form-select" id="couponStatus" name="couponStatus">
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                        </select>
                                        <small class="form-text text-muted">Estado del cupon: </small>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Valido solo la primera compra:</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Ingresa si es valido solo la primera compra" name="text" />
                                        </div>
                                        <small class="form-text text-muted">Ingresa si es valido solo la primera compra</small>
                                    </div>
                                </div>

                                <!-- Botones -->
                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-primary me-2">Modificar cupon</button>
                                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                                    <input hidden name="action" value="add_user" />
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