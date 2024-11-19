<?php
include "../../config.php";
include "../../app/ProductsController.php";
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
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Información del producto</h5>
                        </div>
                        <div class="card-body">
                            <form id="createProductForm" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="form-label">Nombre del producto</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="nombre del producto" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Marca</label>
                                    <select class="form-select" id="brand_id" name="brand_id" required>
                                    <option value="" disabled selected>Seleccione una marca</option>
        <option value="1">Marca Ejemplo 1</option>
        <option value="2">Marca Ejemplo 2</option>
        <option value="3">Marca Ejemplo 3</option>
        <option value="4">Marca Ejemplo 4</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug del producto" required />
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Descripción del producto</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="descripción del producto" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Palabras claves</label>
                                    <input type="text" class="form-control" id="keywords" name="keywords" placeholder="palabras claves (rojo, azul, grande, etc)" />
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Características del producto</label>
                                    <textarea class="form-control" id="features" name="features" placeholder="características" required></textarea>
                                </div>
                            </form>
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
                                <input type="file" id="cover" name="cover" class="d-none" accept="image/*" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body text-end btn-page">
                            <button type="submit" class="btn btn-primary mb-0" form="createProductForm">Publicar producto</button>
                            <button type="button" class="btn btn-outline-secondary mb-0">Cancelar</button>
                        </div>
                    </div>
                </div>
                <div id="responseMessage" class="d-none"></div>
            </div>
        </div>
    </div>

    <?php include "../layouts/footer.php" ?>
    <?php include "../layouts/scripts.php" ?>
    <?php include "../layouts/modals.php" ?>

    <script>
        document.getElementById('createProductForm').addEventListener('submit', async function(event) {
            event.preventDefault();

            const formData = new FormData(this);
            formData.append('action', 'crear_producto');

            try {
                const response = await fetch('../../app/ProductsController.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();
                const messageElement = document.getElementById('responseMessage');

                if (result.code > 0) {
                    messageElement.textContent = 'Producto creado exitosamente.';
                    messageElement.className = 'alert alert-success';
                    messageElement.classList.remove('d-none');
                    this.reset();
                } else {
                    messageElement.textContent = result.message || 'Error al crear el producto.';
                    messageElement.className = 'alert alert-danger';
                    messageElement.classList.remove('d-none');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Error al conectar con el servidor.');
            }
        });
    </script>
</body>
</html>
