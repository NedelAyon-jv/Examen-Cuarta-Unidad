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
                <form method="POST" action="../../app/ProductsController.php" enctype="multipart/form-data" class="w-100">
                    <div class="col-xl-10">
                        <div class="card w-100">
                            <div class="card-header">
                                <h5>Información de la orden</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Folio:</label>
                                    <input type="text" class="form-control w-100" id="name" name="name" placeholder="Ingresar folio" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Total:</label>
                                    <input type="text" class="form-control w-100" id="name" name="name" placeholder="Ingresar total" required />
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Esta pagado:</label>
                                    <textarea class="form-control w-100" id="description" name="description" placeholder="Esta pagado" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Cliente Id</label>
                                    <input type="text" class="form-control w-100" id="keywords" name="slug" placeholder="Cliente id" />
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Direción id</label>
                                    <textarea class="form-control w-100" id="features" name="features" placeholder="características" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Estado de la orden id: </label>
                                    <input type="text" class="form-control w-100" id="keywords" name="slug" placeholder="Estado de la orden" />
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Tipo de pago id</label>
                                    <textarea class="form-control w-100" id="features" name="features" placeholder="tipo de pago" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Cupon Id</label>
                                    <input type="text" class="form-control w-100" id="keywords" name="slug" placeholder="Cupon id" />
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Cliente</label>
                                    <textarea class="form-control w-100" id="features" name="features" placeholder="cliente" required></textarea>
                                </div>
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
                </form>
            </div>
        </div>
    </div>

    <?php include "../layouts/footer.php" ?>
    <?php include "../layouts/scripts.php" ?>
    <?php include "../layouts/modals.php" ?>
</body>

</html>