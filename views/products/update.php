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
            <form action="app/ProductsController.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="update_producto">
                <input type="hidden" name="product_id" value="<?php echo $_GET['product_id']; ?>" />

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Información del producto</h5>
                            </div>
                            <div class="card-body">
                                <!-- Nombre del Producto -->
                                <div class="mb-3">
                                    <label class="form-label">Nombre del producto</label>
                                    <input type="text" class="form-control" name="name" placeholder="nombre del producto" required />
                                </div>

                                <!-- Slug -->
                                <div class="mb-3">
                                    <label class="form-label">Slug</label>
                                    <input type="text" class="form-control" name="slug" placeholder="slug del producto" required />
                                </div>

                                <!-- Descripción -->
                                <div class="mb-3">
                                    <label class="form-label">Descripción del producto</label>
                                    <textarea class="form-control" name="description" placeholder="descripcion del producto"></textarea>
                                </div>

                                <!-- Características -->
                                <div class="mb-3">
                                    <label class="form-label">Características del producto</label>
                                    <textarea class="form-control" name="features" placeholder="caracteristicas"></textarea>
                                </div>

                                <!-- Marca -->
                                <div class="mb-3">
                                    <label class="form-label">Marca</label>
                                    <select class="form-select" name="brand_id" required>
                                        <option value="">Seleccione una marca</option>
                                        <!-- Opciones de marcas dinámicas -->
                                        <option value="1">Marca A</option>
                                        <option value="2">Marca B</option>
                                        <option value="3">Marca C</option>
                                    </select>
                                </div>

                                <!-- Palabras Claves -->
                                <div class="mb-3">
                                    <label class="form-label">Palabras claves</label>
                                    <input type="text" class="form-control" name="keywords" placeholder="Ejemplo: rojo, azul, grande" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Imagen del Producto -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Imagen del Producto</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-0">
                                    <p><span class="text-danger">*</span> Tamaño recomendado 800x800 </p>
                                    <label class="btn btn-outline-secondary" for="flupld">
                                        <i class="ti ti-upload me-2"></i> Seleccione una imagen
                                    </label>
                                    <input type="file" id="flupld" name="cover" class="d-none" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Botones de Acción -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body text-end btn-page">
                                <button type="submit" class="btn btn-primary mb-0">Publicar producto</button>
                                <button type="button" onclick="window.history.back();" class="btn btn-outline-secondary mb-0">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- [ Main Content ] end -->
        </div>
    </div>

    <?php include "../layouts/footer.php" ?>
    <?php include "../layouts/scripts.php" ?>
    <?php include "../layouts/modals.php" ?>
</body>
<!-- [Body] end -->

</html>
