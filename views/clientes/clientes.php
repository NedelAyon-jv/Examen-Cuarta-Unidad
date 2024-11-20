<!doctype html>
<html lang="en">
<!-- [Head] start -->
<?php include "../../config.php"; 
include "../../app/clientController.php";
$clientController = new clientController();
$clients = $clientController->getClientes();
?>
<?php include "../layouts/head.php" ?>

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
    <!-- [ Sidebar Menu ] start -->
    <?php include "../layouts/sidebar.php" ?>
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->
    <?php include "../layouts/navbar.php" ?>
    <!-- [ Header ] end -->
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
                                <li class="breadcrumb-item" aria-current="page">Products list</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <div class="page-header-title">
                                <h2 class="mb-0">Clientes</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <a class="btn btn-outline-secondary shadow-sm rounded-pill px-4" ">Agregar cliente</a>
        <br>
        <br>
      <!-- [ Main Content ] start -->
      <div class=" row">
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
                    <div class="card table-card">
                        <div class="card-body">
                            <!-- Botón para añadir producto -->
                            <div class="text-end p-sm-4 pb-sm-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="catalogType">Clientes:</label>
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
                                                <th class="text-center">Nombre del cliente</th>
                                                <th class="text-center">Nivel</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Suscripción</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <!-- Producto -->
                                            <tr>
                                                <?php if (isset($clients) && count($clients)): ?>
                                                    <?php foreach ($clients as $client): ?>
                                                <td class="text-end"><?php echo $client->id ?></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col">
                                                            <h6 class="mb-1 text-center"> 
                                                                <?php
                                                                        echo isset($client->name) && !empty($client->name)
                                                                            ? $client->name
                                                                                : "Nombre desconocido";
                                                                ?></h6>
                                                            <p class="text-muted f-12 mb-0 text-center"><?php echo $client->phone_number ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                        <?php
                                                            echo isset($client->level->name) && !empty($client->level->name)
                                                                ? $client->level->name
                                                                : "No se encontró";
                                                        ?></td>
                                                <td class="text-center"><?php echo $client->email ?></td>
                                                <td class="text-center">
                                                        <?php
                                                            echo isset($client->is_suscribed)
                                                                ? ($client->is_suscribed == 0 ? "No hay suscripción" : ($client->is_suscribed == 1 ? "Mensual" : ($client->is_suscribed == 2 ? "Anual" : "Desconocido")))
                                                                : "No hay suscripción";
                                                        ?>
                                                    <div class="prod-action-links">
                                                        <ul class="list-inline me-auto mb-0">
                                                            <!-- Ver producto -->
                                                            <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                                                <a href="<?php echo BASE_PATH . "clientes/details/" . $client->id; ?>" class="avtar avtar-xs btn-link-secondary btn-pc-default">
                                                                    <i class="ti ti-eye f-18"></i>
                                                                </a>
                                                            </li>
                                                            <!-- Editar producto -->
                                                            <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                                                <a href="ecom_product-add.html" class="avtar avtar-xs btn-link-success btn-pc-default">
                                                                    <i class="ti ti-edit-circle f-18"></i>
                                                                </a>
                                                            </li>
                                                            <!-- Eliminar producto -->
                                                            <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                                                <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                                    <i class="ti ti-trash f-18"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                </td>
                                            </tr>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ sample-page ] end -->
                </div>

                <!-- [ Main Content ] end -->
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="productOffcanvas" aria-labelledby="productOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="productOffcanvasLabel">Product Details</h5>
            <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="offcanvas">
                <i class="ti ti-x f-20"></i>
            </a>
        </div>
        <div class="offcanvas-body">
            <div class="card product-card shadow-none border-0">
                <div class="card-img-top p-0">
                    <a href="ecom_product-details.html">
                        <img src="../assets/images/application/img-prod-4.jpg" alt="image" class="img-prod img-fluid" />
                    </a>
                    <div class="card-body position-absolute end-0 top-0">
                        <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" />
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-heart prod-likes-icon">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body position-absolute start-0 top-0">
                        <span class="badge bg-danger badge-prod-card">30%</span>
                    </div>
                </div>
            </div>
            <h5>Glitter gold Mesh Walking Shoes</h5>
            <p class="text-muted">Image Enlargement: After shooting, you can enlarge photographs of the objects for clear zoomed view. Change In Aspect Ratio:
                Boldly crop the subject and save it with a composition that has impact.</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item px-0">
                    <div class="d-inline-flex align-items-center justify-content-between w-100">
                        <p class="mb-0 text-muted me-1">Price</p>
                        <h4 class="mb-0"><b>$299.00</b><span class="mx-2 f-14 text-muted f-w-400 text-decoration-line-through">$399.00</span></h4>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="d-inline-flex align-items-center justify-content-between w-100">
                        <p class="mb-0 text-muted me-1">Categories</p>
                        <h6 class="mb-0">Shoes</h6>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="d-inline-flex align-items-center justify-content-between w-100">
                        <p class="mb-0 text-muted me-1">Status</p>
                        <h6 class="mb-0"><span class="badge bg-warning rounded-pill">Process</span></h6>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="d-inline-flex align-items-center justify-content-between w-100">
                        <p class="mb-0 text-muted me-1">Brands</p>
                        <h6 class="mb-0"><img src="../assets/images/application/img-prod-brand-1.png" alt="user-image" class="wid-40" /></h6>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <?php include "../layouts/footer.php" ?>
    <!-- Required Js -->

    <?php include "../layouts/scripts.php" ?>
    <!-- [Page Specific JS] start -->
    <script src="../assets/js/plugins/simple-datatables.js"></script>
    <!-- [Page Specific JS] end -->
    <div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
        <div class="offcanvas-header justify-content-between">
            <h5 class="offcanvas-title">Settings</h5>
            <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x"></i></button>
        </div>
        <div class="pct-body customizer-body">
            <div class="offcanvas-body py-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="pc-dark">
                            <h6 class="mb-1">Theme Mode</h6>
                            <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
                            <div class="row theme-color theme-layout">
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button class="preset-btn btn active" data-value="true" onclick="layout_change('light');">
                                            <span class="btn-label">Light</span>
                                            <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button class="preset-btn btn" data-value="false" onclick="layout_change('dark');">
                                            <span class="btn-label">Dark</span>
                                            <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-grid">
                                        <button
                                            class="preset-btn btn"
                                            data-value="default"
                                            onclick="layout_change_default();"
                                            data-bs-toggle="tooltip"
                                            title="Automatically sets the theme based on user's operating system's color scheme.">
                                            <span class="btn-label">Default</span>
                                            <span class="pc-lay-icon d-flex align-items-center justify-content-center">
                                                <i class="ph-duotone ph-cpu"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Sidebar Theme</h6>
                        <p class="text-muted text-sm">Choose Sidebar Theme</p>
                        <div class="row theme-color theme-sidebar-color">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="true" onclick="layout_sidebar_change('dark');">
                                        <span class="btn-label">Dark</span>
                                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="false" onclick="layout_sidebar_change('light');">
                                        <span class="btn-label">Light</span>
                                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Accent color</h6>
                        <p class="text-muted text-sm">Choose your primary theme color</p>
                        <div class="theme-color preset-color">
                            <a href="#!" class="active" data-value="preset-1"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-2"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-3"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-4"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-5"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-6"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-7"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-8"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-9"><i class="ti ti-check"></i></a>
                            <a href="#!" data-value="preset-10"><i class="ti ti-check"></i></a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6 class="mb-1">Sidebar Caption</h6>
                        <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
                        <div class="row theme-color theme-nav-caption">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="true" onclick="layout_caption_change('true');">
                                        <span class="btn-label">Caption Show</span>
                                        <span class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="false" onclick="layout_caption_change('false');">
                                        <span class="btn-label">Caption Hide</span>
                                        <span class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="pc-rtl">
                            <h6 class="mb-1">Theme Layout</h6>
                            <p class="text-muted text-sm">LTR/RTL</p>
                            <div class="row theme-color theme-direction">
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn active" data-value="false" onclick="layout_rtl_change('false');">
                                            <span class="btn-label">LTR</span>
                                            <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn" data-value="true" onclick="layout_rtl_change('true');">
                                            <span class="btn-label">RTL</span>
                                            <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item pc-box-width">
                        <div class="pc-container-width">
                            <h6 class="mb-1">Layout Width</h6>
                            <p class="text-muted text-sm">Choose Full or Container Layout</p>
                            <div class="row theme-color theme-container">
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn active" data-value="false" onclick="change_box_container('false')">
                                            <span class="btn-label">Full Width</span>
                                            <span class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button class="preset-btn btn" data-value="true" onclick="change_box_container('true')">
                                            <span class="btn-label">Fixed Width</span>
                                            <span class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-grid">
                            <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</body>
<!-- [Body] end -->

</html>