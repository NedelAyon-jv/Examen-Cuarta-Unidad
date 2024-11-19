<!doctype html>
<html lang="en">

<!-- [Head] -->

<head>
    <?php
    include "../../config.php";
    include "../layouts/head.php";
    ?>
</head>

<!-- [Body] -->

<body data-pc-preset="preset-1"
    data-pc-sidebar-theme="light"
    data-pc-sidebar-caption="true"
    data-pc-direction="ltr"
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

                <div class="col-md-6">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body text-center p-4">
                            <img class="rounded-circle img-fluid wid-90 mb-3"
                                src="URL_DE_AVATAR"
                                alt="Avatar"
                                onerror="this.onerror=null; this.src='URL_GENERICA';" />
                            <h3 class="mb-2">Nombre Completo</h3>
                            <p class="text-muted mb-2">Correo Electrónico</p>
                            <p><strong>Teléfono:</strong> Número de Teléfono</p>
                            <p><strong>Membresia:</strong> Tipo de membresia</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Nivel y Órdenes</h5>
                        </div>
                        <div class="card-body text-start p-4">
                            <p><strong>Nivel:</strong> Nivel del Usuario</p>
                            <p><strong>Órdenes:</strong></p>
                            <ul class="list-group">
                                <li class="list-group-item">Orden #1 - Estado</li>
                            </ul>
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


                <div class="col-md-6">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Direcciones Registradas</h5>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-group">
                                <li class="list-group-item">Dirección 1, Ciudad, País</li>
                            </ul>
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
                                                <!-- Producto -->
                                                <tr>
                                                    <td class="text-end">7</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col">
                                                                <h6 class="mb-1 text-center"> Calle y Numero</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Código Postal</td>
                                                    <td class="text-center">Ciudad</td>
                                                    
                                                    <td class="text-center">
                                                        Estado
                                                        
                                                    </td>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ sample-page ] end -->
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