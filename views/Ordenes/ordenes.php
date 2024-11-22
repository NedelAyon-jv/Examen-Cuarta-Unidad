<!doctype html>
<html lang="en">
<!-- [Head] start -->
<?php

include "../../config.php";
include "../../app/ordersController.php";
include "../../app/clientController.php";

$ordersController = new ordersController();
$clientController = new clientController();
$orders = $ordersController->getOrders();
$clients = $clientController->getClientes();
?>

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
                                <li class="breadcrumb-item" aria-current="page">Ordenes</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <div class="page-header-title">
                                <h2 class="mb-0">Ordenes</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <a class="btn btn-outline-secondary shadow-sm rounded-pill px-4" href="#">Agregar orden</a>
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
                                        <label for="catalogType">Ordenes:</label>
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
                                                <th class="text-center">Cliente id</th>
                                                <th class="text-center">Estado de orden id</th>
                                                <th class="text-center">Total</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if (isset($orders) && count($orders)): ?>
                                                <?php foreach ($orders as $order): ?>
                                                    <!-- Producto -->
                                                    <tr>

                                                        <td class="text-end"> <?php echo $order->id ?> </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h6 class="mb-1 text-center"><?php
                                                                                                    $clientName = 'Cliente Desconocido';
                                                                                                    foreach ($clients as $client) {
                                                                                                        if ($client->id === $order->client_id) {
                                                                                                            $clientName = $client->name;
                                                                                                            break;
                                                                                                        }
                                                                                                    }
                                                                                                    echo $clientName;
                                                                                                    ?></h6>
                                                                    <p class="text-muted f-12 mb-0 text-center"><?php echo $order->folio ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><?php echo $order->client_id ?></td>
                                                        <td class="text-center"><?php
                                                                                switch ($order->order_status_id) {
                                                                                    case 1:
                                                                                        echo 'Pendiente';
                                                                                        break;
                                                                                    case 2:
                                                                                        echo 'Procesando';
                                                                                        break;
                                                                                    case 3:
                                                                                        echo 'Enviado';
                                                                                        break;
                                                                                    case 4:
                                                                                        echo 'Completado';
                                                                                        break;
                                                                                    case 5:
                                                                                        echo 'Cancelado';
                                                                                        break;
                                                                                    case 6:
                                                                                        echo 'Devuelto';
                                                                                        break;
                                                                                    default:
                                                                                        echo 'Estado Desconocido';
                                                                                }
                                                                                ?></td>
                                                        <td class="text-center">$<?php echo $order->total ?></td>
                                                        <td class="text-center">
                                                            <div class="prod-action-links">
                                                                <ul class="list-inline me-auto mb-0">
                                                                    <!-- Ver orden -->
                                                                    <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                                                        <a href="<?php echo BASE_PATH . "ordenes/details/" . $order->id; ?>" class="avtar avtar-xs btn-link-secondary btn-pc-default"> <i class="ti ti-eye f-18"></i>
                                                                        </a>
                                                                    </li>
                                                                    <!-- Editar orden -->
                                                                    <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                                                        <a href="ecom_product-add.html" class="avtar avtar-xs btn-link-success btn-pc-default">
                                                                            <i class="ti ti-edit-circle f-18"></i>
                                                                        </a>
                                                                    </li>
                                                                    <!-- Eliminar orden -->
                                                                    <form action="../../app/ordersController.php" method="POST" id="deleteOrderForm-<?= $order->id ?>">
                                                                        <input type="text" hidden name="action" value="delete_order">
                                                                        <input type="hidden" name="id" value="<?= $order->id ?>">
                                                                    </form>
                                                                    <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                                                        <button value="<?= $order->id ?>" class="avtar avtar-xs btn-link-danger btn-pc-default deleteOrder">
                                                                            <i class="ti ti-trash f-18"></i>
                                                                            </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
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
        <?php include "../layouts/modals.php" ?>


        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let deleteOrder = document.querySelectorAll('.deleteOrder');
                deleteOrder.forEach(button => {
                    button.addEventListener('click', function() {
                        swal({

                                title: "¿Estás seguro?",
                                text: "¡Una vez eliminado, no podrás recuperar esta información!",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                            })
                            .then((willDelete) => {
                                if (willDelete) {
                                    const form = document.getElementById(`deleteOrderForm-${button.value}`);
                                    if (form) {
                                        form.submit();
                                        swal("¡La información ha sido eliminada!", {
                                            icon: "success",
                                        });
                                    } else {
                                        console.error(`Formulario con id deleteOrderForm-${button.value} no encontrado.`);
                                    }
                                }
                            });
                    });
                });
            });
        </script>
</body>
<!-- [Body] end -->

</html>