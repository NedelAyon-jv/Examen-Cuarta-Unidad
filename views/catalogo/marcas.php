<!doctype html>
<html lang="en">
<!-- [Head] start -->
<?php include "../../config.php" ?>
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
                <li class="breadcrumb-item" aria-current="page">Catalogos</li>
              </ul>
            </div>
            <div class="col-md-12">
              <hr>
              <div class="page-header-title">
                <h2 class="mb-0">Catalogos</h2>
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
          <div class="card table-card">
            <div class="card-body">
              <!-- Botón para añadir producto -->
              <div class="text-end p-sm-4 pb-sm-2">
                <div class="row">
                  <div class="col-md-6">
                    <label for="catalogType">Marcas:</label>
                  </div>
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
                      <th>Producto</th>
                      <th class="text-center">Descripción</th>
                      <th class="text-center">Marca</th>
                    </tr>
                  </thead>

                  <tbody>
                    <!-- Producto -->
                    <tr>
                      <td class="text-end">7</td>
                      <td>
                        <div class="row">
                          <div class="col-auto pe-0">
                            <img src="../assets/images/application/img-prod-1.jpg" alt="user-image" class="wid-40 rounded" />
                          </div>
                          <div class="col">
                            <h6 class="mb-1">producto</h6>
                            <p class="text-muted f-12 mb-0">slug</p>
                          </div>
                        </div>
                      </td>
                      <td class="text-center">Descripción</td>
                      <td class="text-center">
                        <img src="../assets/images/application/img-prod-brand-1.png" alt="user-image" class="wid-40" />
                        <div class="prod-action-links">
                          <ul class="list-inline me-auto mb-0">
                            <!-- Ver producto -->
                            <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                              <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default" data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
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
                    </tr>
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

  <!-- [ Main Content ] end -->
  <?php include "../layouts/footer.php" ?>
  <!-- Required Js -->

  <?php include "../layouts/scripts.php" ?>
  <?php include "../layouts/modals.php" ?>

  <!-- [Page Specific JS] start -->
  <script src="../assets/js/plugins/simple-datatables.js"></script>
  
  <!-- [Page Specific JS] end -->


</body>
<!-- [Body] end -->

</html>
