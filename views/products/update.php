<?php
include "../../config.php";
include "../../app/ProductsController.php";
include "../../app/BrandsController.php";
// Verificar si se proporciona un slug para el producto
if (!isset($_GET['slug'])) {
    header("Location: ../dashboard/index.html?status=error");
    exit();
}

$slug = $_GET['slug'];
$productsController = new ProductsController();
$product = $productsController->getBySlug($slug);
$brandsController = new BrandsController();

$marcas = $brandsController->get();
if (!$product) {
    header("Location: ../dashboard/index.html?status=not_found");
    exit();
}
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

            <form action="../../app/ProductsController.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="update_producto">
                <input type="hidden" name="product_id" value="<?= $product->id ?>">

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Información del producto</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Nombre del producto</label>
                                    <input type="text" class="form-control" name="name" value="<?= $product->name ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Slug</label>
                                    <input type="text" class="form-control" name="slug" value="<?= $product->slug ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Descripción</label>
                                    <textarea class="form-control" name="description"><?= $product->description ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Características</label>
                                    <textarea class="form-control" name="features"><?= $product->features ?></textarea>
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
                                    <label class="btn btn-outline-secondary" for="flupld">
                                        <i class="ti ti-upload me-2"></i> Seleccione una imagen
                                    </label>
                                    <input type="file" id="flupld" name="cover" class="d-none">
                                    <?php if (!empty($product->cover)): ?>
                                        <img src="<?= $product->cover ?>" alt="Imagen del producto" class="img-thumbnail mt-2" style="max-width: 150px;">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body text-end btn-page">
                                <button type="submit" class="btn btn-primary mb-0">Actualizar producto</button>
                                <button type="button" onclick="window.history.back();" class="btn btn-outline-secondary mb-0">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include "../layouts/footer.php" ?>
    <?php include "../layouts/scripts.php" ?>
    <?php include "../layouts/modals.php" ?>
</body>

</html>
