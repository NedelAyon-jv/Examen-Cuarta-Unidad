<?php
include "../../config.php";
include_once "../../app/clientController.php";
include_once "../../app/levelsController.php";
$clientController = new clientController();
$levelsController = new LevelsController();
$subscriptions = $clientController->getSuscripciones();
// Obtener los niveles
$levels = $levelsController->get();
?>

<head>
    <?php include "../layouts/head.php" ?>
</head>

<!doctype html>
<html lang="en">
<!-- [Head] start -->
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
    data-pc-theme="light">
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
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->

    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <section class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Forms</a></li>
                                <li class="breadcrumb-item" aria-current="page">Registro de clientes</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Registro de clientes</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->


            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ form-element ] start -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Llena cada uno de los campos con lo que se te indica:</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="../../app/clientController.php">
                                <!-- Nombre(s) y Apellido(s) -->
                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Nombre(s):</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Ingresar tu nombre(s)" name="name" />
                                        <small class="form-text text-muted">Ingrese su Nombre(s)</small>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Correo Electrónico:</label>
                                    <div class="col-lg-4">
                                        <input type="email" class="form-control" placeholder="Ingresar tu Correo Electrónico " name="email" />
                                        <small class="form-text text-muted">Ingresar tu Correo Electrónico</small>
                                    </div>
                                    
                                </div>

                                <!-- Correo electrónico -->
                                <div class="row mb-3">
                                <label class="col-lg-2 col-form-label">Contraseña:</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="password" class="form-control" placeholder="Ingresar tu Contraseña " name="password" />
                                            <span class="input-group-text bg-transparent">
                                                <i class="feather icon-lock"></i>
                                            </span>
                                        </div>
                                        <small class="form-text text-muted">Ingresar tu Contraseña</small>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Número telefónico:</label>
                                    <div class="col-lg-4">
                                        <input type="number" class="form-control" placeholder="Ingresar tu número telefónico " name="phone_number" />
                                        <small class="form-text text-muted">Ingresar tu número telefónico</small>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Suscripción:</label>
                                    <div class="col-lg-4">
                                        <select class="form-control" name="is_suscribed">
                                        <?php foreach ($subscriptions as $subscription): ?>
                                                <option value="<?php echo htmlspecialchars($subscription['id']); ?>">
                                                    <?php echo htmlspecialchars($subscription['name']); ?>
                                                </option>
                                            <?php endforeach; ?>     
                                        </select>
                                        <small class="form-text text-muted">Seleccione su suscripción</small>
                                    </div>

                                    <label class="col-lg-2 col-form-label">Nivel de cliente:</label>
                                    <div class="col-lg-4">
                                        <select class="form-control" name="level_id">
                                        <option value="0">No cuenta con nivel de cliente</option>
                                            <?php foreach ($levels as $level): ?>
                                                <option value="<?php echo htmlspecialchars($level->id); ?>">
                                                    <?php echo htmlspecialchars($level->name); ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="form-text text-muted">Seleccione su nivel de cliente</small>
                                    </div>
                                </div>


                                <!-- Botones -->
                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-primary me-2">Crear cliente</button>
                                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                                    <input hidden name="action" value="add_cliente" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- [ form-element ] end -->
            </div>
    </section>
    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <?php include "../layouts/footer.php" ?>

    <?php include "../layouts/scripts.php" ?>

    <?php include "../layouts/modals.php" ?>


</body>
<!-- [Body] end -->

</html>