<?php
session_start();
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
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Users</a></li>
                  <li class="breadcrumb-item" aria-current="page">Perfil</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Perfil</h2>
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
              <div class="col-lg-5 col-xxl-3">
                <div class="card overflow-hidden">
                  <div class="card-body position-relative">
                    <div class="text-center mt-3">
                      <div class="chat-avtar d-inline-flex mx-auto">
                        <img
                          class="rounded-circle img-fluid wid-90 img-thumbnail"
                          src="../assets/images/user/avatar-1.jpg"
                          alt="User image"
                        />
                        <i class="chat-badge bg-success me-2 mb-2"></i>
                      </div>
                      <h5 class="mb-0"> <?= $_SESSION['user_data']-> name?> <?= $_SESSION['user_data']-> lastname?></h5>
                      <p class="text-muted text-sm"><a href="#" class="link-primary"> <?= $_SESSION['user_data']-> email?> </a></p>
                     
                    </div>
                  </div>
                  <div
                    class="nav flex-column nav-pills list-group list-group-flush account-pills mb-0"
                    id="user-set-tab"
                    role="tablist"
                    aria-orientation="vertical"
                  >
                    <a
                      class="nav-link list-group-item list-group-item-action active"
                      id="user-set-profile-tab"
                      data-bs-toggle="pill"
                      href="#user-set-profile"
                      role="tab"
                      aria-controls="user-set-profile"
                      aria-selected="true"
                    >
                      <span class="f-w-500"><i class="ph-duotone ph-user-circle m-r-10"></i>Informacion personal</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-xxl-9">
                <div class="tab-content" id="user-set-tabContent">
                  <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">
                    <div class="card">
                      <div class="card-header">
                        <h5>Sobre mi 
                        </h5>
                      </div>
                      <div class="card-body">
                        <p class="mb-0"
                          >Soy una cuenta creada con el fin de probar la plataforma</p
                        >
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <h5>Detalles personales</h5>
                      </div>
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item px-0 pt-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Nombre(s):</p>
                                <p class="mb-0"><?= $_SESSION['user_data']-> name?></p>
                              </div>
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Apellido(s):</p>
                                <p class="mb-0"><?= $_SESSION['user_data']-> lastname?></p>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item px-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Telefono:</p>
                                <p class="mb-0"><?= $_SESSION['user_data']-> phone_number?></p>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item px-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Email:</p>
                                <p class="mb-0"><?= $_SESSION['user_data']-> email?></p>
                              </div>
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Rol:</p>
                                <p class="mb-0"><?= $_SESSION['user_data']-> role?></p>
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