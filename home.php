<?php
session_start();
include "config.php";

?>
<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
  <?php include "views/layouts/head.php" ?>
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
  <?php include "views/layouts/sidebar.php" ?>
  <?php include "views/layouts/navbar.php" ?>
  <!-- [ Main Content ] start -->

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Home</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Home</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="container mt-5">
        <br>
        <div class="row justify-content-center mt-5"> <!-- Añadí mt-5 aquí para moverlas más abajo -->
          <!-- Tarjeta 1 -->
          <div class="col-md-2 mb-4">
            <div class="card" style="width: 70%;">
              <img src="https://ui-avatars.com/api/?name=MAQUETADOR&size=256&background=random&color=fff" onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=MAQUETADOR&size=256&background=random&color=fff';"" class=" card-img-top" alt="Miembro 1">
              <div class="card-body">
                <h5 class="card-title">Nedel Enrique Ayon Camacho </h5>
                <p class="card-text">Maquetador</p>
              </div>
            </div>
          </div>

          <!-- Tarjeta 2 -->
          <div class="col-md-2 mb-4">
            <div class="card" style="width: 70%;">
              <img src=src="https://ui-avatars.com/api/?name=BACKEND&size=256&background=random&color=fff" onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=BACKEND&size=256&background=random&color=fff';" class="card-img-top" alt="Miembro 2">
              <div class="card-body">
                <h5 class="card-title">Victor Yahir Caraveo Guerrero</h5>
                <p class="card-text">Backend</p>
              </div>
            </div>
          </div>

          <!-- Tarjeta 3 -->
          <div class="col-md-2 mb-4">
            <div class="card" style="width: 70%;">
              <img src=src="https://ui-avatars.com/api/?name=FRONTEND&size=256&background=random&color=fff" onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=FRONTEND&size=256&background=random&color=fff';" class="card-img-top" alt="Miembro 3">
              <div class="card-body">
                <h5 class="card-title">Jose Eduardo Hirales Nuñez</h5>
                <p class="card-text">Frontend</p>
              </div>
            </div>
          </div>

          <!-- Tarjeta 4 -->
          <div class="col-md-2 mb-4">
            <div class="card" style="width: 70%;">
              <img src=src="https://ui-avatars.com/api/?name=FRONTEND&size=256&background=random&color=fff" onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=FRONTEND&size=256&background=random&color=fff';" class="card-img-top" alt="Miembro 4">
              <div class="card-body">
                <h5 class="card-title">Erik Tonatiuh Estrada Zuñiga </h5>
                <p class="card-text">Frontend</p>
              </div>
            </div>
          </div>

          <!-- Tarjeta 5 -->
          <div class="col-md-2 mb-4">
            <div class="card" style="width: 70%;">
              <img src=src="https://ui-avatars.com/api/?name=QA&size=256&background=random&color=fff" onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=QA&size=256&background=random&color=fff';" class="card-img-top" alt="Miembro 5">
              <div class="card-body">
                <h5 class="card-title">Angel de Jesus Guzman Valenzuela</h5>
                <p class="card-text">QA.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>

  <?php include "views/layouts/footer.php" ?>

  <script src="<?= BASE_PATH ?>assets/js/plugins/apexcharts.min.js"></script>
  <script src="<?= BASE_PATH ?>assets/js/plugins/jsvectormap.min.js"></script>
  <script src="<?= BASE_PATH ?>assets/js/plugins/world.js"></script>
  <script src="<?= BASE_PATH ?>assets/js/plugins/world-merc.js"></script>
  <script src="<?= BASE_PATH ?>assets/js/pages/dashboard-default.js"></script>

  <?php include "views/layouts/scripts.php" ?>

  <?php include "views/layouts/modals.php" ?>
</body>
<!-- [Body] end -->undefined

</html>