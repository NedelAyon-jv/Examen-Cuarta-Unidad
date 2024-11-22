<!doctype html>
<html lang="en">
<!-- [Head] start -->
<?php
session_start();
include "../../config.php";
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
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->

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
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Ordenes</a></li>
                  <li class="breadcrumb-item" aria-current="page">Detalles</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Detalles Ordenes</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ sample-page ] start -->
          <div class="col-sm-12">
            <div class="card bg-primary">
            </div>
            <div class="row">            
              <div class="col-lg-7 col-xxl-9">
                <div class="tab-content" id="user-set-tabContent">
                  <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">
                    <div class="card">
                      <div class="card-header">
                        <h5>Detalles de la orden</h5>
                      </div>
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item px-0 pt-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">folio:</p>
                                <p class="mb-0 text-muted">folio:</p>
                              </div>
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">total:</p>
                                <p class="mb-0 text-muted">1231241:</p>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item px-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Estado de pago:</p>
                                <p class="mb-0 text-muted">Pagado :</p>
                              </div>
                                <div class="col-md-6">
                                <p class="mb-1 text-muted">Cliente:</p>
                                <p class="mb-0"><?= $_SESSION['user_data']-> role?></p>
                              </div>
                            </div>
                            
                          </li>
                          <li class="list-group-item px-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Cliente id:</p>
                                <p class="mb-0 text-muted">12312312:</p>
                              </div>
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Adress id:</p>
                                <p class="mb-0 text-muted">12412512:</p>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item px-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Estado de orden id:</p>
                                <p class="mb-0 text-muted">pendiente:</p>
                              </div>
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Tipo de pago id:</p>
                                <p class="mb-0 text-muted">Efectivo:</p>
                              </div>
                            </div>
                          </li>

                          <li class="list-group-item px-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Cupon id:</p>
                                <p class="mb-0"><?= $_SESSION['user_data']-> email?></p>
                              </div>
                            </div>
                          </li>
                        
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->

    <?php include "../layouts/footer.php" ?>

    <?php include "../layouts/scripts.php" ?>

    <?php include "../layouts/modals.php" ?>


</body>
<!-- [Body] end -->

</html>