<?php

include "../../config.php";

?>
<!doctype html>
<html lang="en">
<!-- [Head] start -->

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
    <?php include "../layouts/sidebar.php" ?>
    <?php include "../layouts/navbar.php" ?>

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
                                <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                                <li class="breadcrumb-item" aria-current="page">Editar producto</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Editar producto</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Información del producto</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Nombre del producto</label>
                                <input type="text" class="form-control" placeholder="nombre del producto" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Marca</label>
                                <select class="form-select">
                                    <option>Marcas</option>
                                </select>
                            </div>
                            <div class="mb-0">
                                <label class="form-label">Descripcion del producto</label>
                                <textarea class="form-control" placeholder="descripcion del producto"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Palabras claves</label>
                                <input type="text" class="form-control" placeholder="palabras claves(rojo, azul, grande, etc)" />
                            </div>
                            <div class="mb-0">
                                <label class="form-label">Caracteristicas del producto</label>
                                <textarea class="form-control" placeholder="caracteristicas"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Imagen del Producto</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-0">
                            <p><span class="text-danger">*</span> Tamaño recomendado 800x800 </p>
                            <label class="btn btn-outline-secondary" for="flupld"><i class="ti ti-upload me-2"></i> Seleccione una imagen</label>
                            <input type="file" id="flupld" class="d-none" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body text-end btn-page">
                        <button class="btn btn-primary mb-0">Publicar producto</button>
                        <button class="btn btn-outline-secondary mb-0">Cancelar</button>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
    </div>

    <?php include "../layouts/footer.php" ?>

    <?php include "../layouts/scripts.php" ?>

    <?php include "../layouts/modals.php" ?>
</body>
<!-- [Body] end -->undefined

</html>