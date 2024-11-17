<!doctype html>
<html lang="en">
<!-- [Head] start -->
<?php include "../../config.php"; ?>

<head>
    <?php include "../layouts/head.php"; ?>
</head>
<!-- [Head] end -->

<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light"
    data-pc-sidebar-caption="true" data-pc-direction="ltr"
    data-pc-theme="light">

    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ Sidebar Menu ] start -->
    <?php include "../layouts/sidebar.php"; ?>
    <?php include "../layouts/navbar.php"; ?>
    <!-- [ Sidebar Menu ] end -->

    <!-- [ Main Content ] start -->
    <section class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../dashboard/index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0)">Forms</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Editar usuario
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Editar usuario</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Form Content ] start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Actualiza los datos a tu preferencia</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Nombre(s):</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Ingresar tu nombre(s)" />
                                        <small class="form-text text-muted">Ingrese su Nombre(s)</small>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Apellido(s):</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Ingresar tu apellido(s)" />
                                        <small class="form-text text-muted">Ingrese su Apellido(s)</small>
                                    </div>

                                </div>


                                <!-- Correo electrónico -->
                                <div class="row mb-3">
                                    <label class="col-lg-2 col-form-label">Correo Electrónico:</label>
                                    <div class="col-lg-4">
                                        <input type="email" class="form-control" placeholder="Ingresar tu Correo Electrónico" />
                                        <small class="form-text text-muted">Ingresar tu Correo Electrónico</small>
                                    </div>
                                    <label class="col-lg-2 col-form-label">Número telefónico:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="Ingresar tu número telefónico" />
                                        <small class="form-text text-muted">Ingresar tu número telefónico</small>
                                    </div>
                                </div>
                                <div class="mb-3 row g-3">
                                    <label class="col-lg-2 col-form-label">Contraseña:</label>
                                    <div class="col-lg-3">
                                        <div class="input-group search-form">
                                            <input type="password" class="form-control" placeholder="Ingresar tu Contraseña" />
                                            <span class="input-group-text bg-transparent"><i class="feather icon-lock"></i></span>
                                        </div>
                                        <small class="form-text text-muted">Ingresar tu Contraseña</small>
                                    </div>
                                </div>
                                <div class="mb-3 row g-3 align-items-center">
                                    <label class="col-lg-2 col-form-label">Rol de usuario:</label>
                                    <div class="col-lg-3">
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="customRadioInline21" name="customRadioInline1"
                                                    class="form-check-input" checked />
                                                <label class="form-check-label" for="customRadioInline21">Administrador</label>
                                            </div>
                                        </div>
                                        <small class="form-text">Rol por defecto</small>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Actualizar</button>
                                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Form Content ] end -->
        </div>
    </section>
    <!-- [ Main Content ] end -->

    <!-- [ Footer & Scripts ] start -->
    <?php include "../layouts/footer.php"; ?>
    <?php include "../layouts/scripts.php"; ?>
    <?php include "../layouts/modals.php"; ?>
    <!-- [ Footer & Scripts ] end -->
</body>
<!-- [Body] end -->

</html>