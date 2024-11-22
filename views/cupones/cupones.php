<!doctype html>
<html lang="en">
<!-- [Head] start -->

<?php
include "../../config.php";

include "../../app/ticketController.php";
$ticketController = new ticketController();
$cupones = $ticketController->getTickets();
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
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Ui kit</a></li>
                                <li class="breadcrumb-item" aria-current="page">Cupones</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Cupones</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <a class="btn btn-outline-secondary shadow-sm rounded-pill px-4" href="<?php echo BASE_PATH . "cupones/create/" ?>">Agregar Cupon</a>


            <!-- [ Main Content ] start -->


            <div class=" container my-5">
                <div class="row g-4">
                    <?php if (isset($cupones) && count($cupones)): ?>
                        <?php foreach ($cupones as $cupon): ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="card shadow border-0">
                                    <div class="card-header bg-primary text-white text-center">
                                        <h4 class="mb-0"><?php echo $cupon->name ?></h4>
                                        <p class="mb-0">Código: <strong><?php echo $cupon->code ?></strong></p>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center mb-4">
                                            <div class="badge bg-info text-white fs-5"><?php echo $cupon->percentage_discount ?>% de Descuento</div>
                                        </div>
                                        <ul class="list-unstyled mb-4">
                                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Descuento de cantidad: <?php echo $cupon->amount_discount ?></li>
                                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Cantidad mínima requerida:<?php echo $cupon->min_amount_required ?></li>
                                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Productos mínimos requeridos:<?php echo $cupon->min_product_required ?></li>
                                            <li><i class="bi bi-calendar-fill text-primary me-2"></i> Desde:<?php echo $cupon->start_date ?></li>
                                            <li><i class="bi bi-calendar-fill text-primary me-2"></i> Hasta:<?php echo $cupon->end_date ?></li>
                                            <li><i class="bi bi-tags-fill text-warning me-2"></i> Tipo de cupón:<?php echo is_null($cupon->couponable_type) ? "No definido" : $cupon->couponable_type; ?></li>
                                        </ul>
                                        <div class="d-flex gap-2">
                                            <a class="btn btn-outline-primary flex-fill" href="<?php echo BASE_PATH . "cupones/details/" . $cupon->id; ?>">Detalles</a>
                                            <button class="btn btn-secondary flex-fill">Editar</button>
                                            <form action="../../app/ticketController.php" method="POST" id="deleteTicketForm-<?= $cupon->id ?>">
                                                <input type="text" hidden name="action" value="delete_ticket">
                                                <input type="hidden" name="id" value="<?= $cupon->id ?>">
                                            </form>
                                            <button class="btn btn-danger flex-fill deleteTicket" value="<?= $cupon->id ?>">Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <!-- [ Main Content ] end -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        </div>
    </div>




    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <?php include "../layouts/footer.php" ?>

    <?php include "../layouts/scripts.php" ?>

    <?php include "../layouts/modals.php" ?>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let deleteTicket = document.querySelectorAll('.deleteTicket');
            deleteTicket.forEach(button => {
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
                                const form = document.getElementById(`deleteTicketForm-${button.value}`);
                                if (form) {
                                    form.submit();
                                    swal("¡La información ha sido eliminada!", {
                                        icon: "success",
                                    });
                                } else {
                                    console.error(`Formulario con id deleteTicketForm-${button.value} no encontrado.`);
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