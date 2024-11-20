<?php
include "../../config.php";
include "../../app/ProductsController.php";
include_once "../../app/BrandsController.php";

$brandsController = new BrandsController();
$productsController = new ProductsController();
$marcas = $brandsController->get();

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

    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                                <li class="breadcrumb-item" aria-current="page">Añadir nuevo producto</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Añadir nuevo producto</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <form method="POST" action="../../app/ProductsController.php" enctype="multipart/form-data">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Información del producto</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Nombre del producto</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="nombre del producto" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Marca</label>
                                    <select class="form-select" name="brand_id">
                                        <?php if (isset($marcas) && count($marcas)): ?>
                                            <?php foreach ($marcas as $marca): ?>
                                                <option value="<?= $marca->id ?>">
                                                    <?= $marca->name ?>
                                                </option>
                                            <?php endforeach ?>
                                        <?php endif ?>
                                    </select>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Descripción del producto</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="descripción del producto" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Palabras claves</label>
                                    <input type="text" class="form-control" id="keywords" name="slug" placeholder="palabras claves (rojo, azul, grande, etc)" />
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Características del producto</label>
                                    <textarea class="form-control" id="features" name="features" placeholder="características" required></textarea>
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
                                    <p><span class="text-danger">*</span> Tamaño recomendado 800x800</p>
                                    <label class="btn btn-outline-secondary" for="cover">
                                        <i class="ti ti-upload me-2"></i> Seleccione una imagen
                                    </label>
                                    <input type="file" id="cover" name="cover" class="d-none" accept="cover/*" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body text-end btn-page">
                                <button type="submit" class="btn btn-primary mb-0">Publicar producto</button>
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