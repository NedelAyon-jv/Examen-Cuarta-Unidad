<?php
include "../../config.php";
include "../ProductsController.php";

// Crear controlador para obtener productos
$productsController = new ProductsController();
$products = $productsController->get();
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

  <?php include "../layouts/sidebar.php" ?>
  <?php include "../layouts/navbar.php" ?>

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
                <li class="breadcrumb-item" aria-current="page">Products</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Products</h2>
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
          <div class="ecom-wrapper">
            <div class="ecom-content">
              <div class="d-sm-flex align-items-center mb-4">
                <ul class="list-inline me-auto my-1">
                  <li class="list-inline-item">
                    <form class="form-search">
                      <i class="ph-duotone ph-magnifying-glass icon-search"></i>
                      <input type="search" class="form-control" placeholder="Search Products" />
                    </form>
                  </li>
                </ul>
              </div>
              <div class="row">
                <?php foreach ($products as $product): ?>
                <div class="col-sm-6 col-xl-4">
                  <div class="card product-card">
                    <div class="card-img-top">
                      <a href="ecom_product-details.html">
                        <img src="<?= htmlspecialchars($product->cover) ?>" alt="image" class="img-prod img-fluid" />
                      </a>
                      <div class="card-body position-absolute end-0 top-0">
                        <div class="form-check prod-likes">
                          <input type="checkbox" class="form-check-input" />
                          <i data-feather="heart" class="prod-likes-icon"></i>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <a href="ecom_product-details.html">
                        <p class="prod-content mb-0 text-muted"><?= htmlspecialchars($product->name) ?></p>
                      </a>
                      <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                        <h4 class="mb-0 text-truncate"><b>$<?= number_format($product->price, 2) ?></b></h4>
                        <div class="d-inline-flex align-items-center">
                          <i class="ph-duotone ph-star text-warning me-1"></i>
                          <small><?= htmlspecialchars($product->description) ?></small>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <a
                            href="#"
                            class="avtar avtar-s btn-link-secondary btn-prod-card"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#productOffcanvas">
                            <i class="ph-duotone ph-eye f-18"></i>
                          </a>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="d-grid">
                          <a href="update.php?product_id=<?= $product->id ?>" class="btn btn-link-secondary btn-prod-card">Editar</a>
                          <button class="btn btn-link-secondary btn-prod-card">Eliminar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
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
