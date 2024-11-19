<?php
include "../../config.php";
include "../../app/ProductsController.php";

$productsController = new ProductsController();

$products = $productsController->get();

if (!is_array($products)) {
    $products = []; 
}
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
                <?php if (empty($products)): ?>
                  <div class="col-12">
                    <p>No products found.</p>
                  </div>
                <?php else: ?>
                  <?php foreach ($products as $product): ?>
                    <div class="col-sm-6 col-xl-4">
                      <div class="card product-card">
                        <div class="card-img-top">
                          <a href="../../views/products/details.php?slug=<?= urlencode($product->slug) ?>">
                            <img src="<?= $product->cover ?>" alt="image" 
                                 onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=<?= urlencode($product->name); ?>';" 
                                 alt="Product Image" class="img-prod img-fluid" style="height: 400px" />
                          </a>
                          <div class="card-body position-absolute end-0 top-0">
                            <div class="form-check prod-likes">
                              <input type="checkbox" class="form-check-input" />
                              <i data-feather="heart" class="prod-likes-icon"></i>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <a href="../../views/products/details.php?slug=<?= urlencode($product->slug) ?>">
                            <p class="prod-content mb-0 text-muted"><?= $product->name ?? 'Unnamed Product' ?></p>
                          </a>
                          <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                            <h4 class="mb-0 text-truncate"><b>$<?= number_format($product->price ?? 0, 2) ?></b></h4>
                            <div class="d-inline-flex align-items-center">
                              <i class="ph-duotone ph-star text-warning me-1"></i>
                              <small><?= $product->description ?? 'No description available' ?></small>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="flex-shrink-0">
                              <a
                                href="../../views/products/details.php?slug=<?= urlencode($product->slug) ?>"
                                class="avtar avtar-s btn-link-secondary btn-prod-card">
                                <i class="ph-duotone ph-eye f-18"></i>
                              </a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <div class="d-grid">
                                <a href="../../views/products/update.php?product_id=<?= $product->id ?>" class="btn btn-link-secondary btn-prod-card">Editar</a>
                                <form action="../../app/ProductsController.php" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                                  <input type="hidden" name="action" value="delete_producto">
                                  <input type="hidden" name="product_id" value="<?= $product->id ?>">
                                  <button type="submit" class="btn btn-link-secondary btn-prod-card">Eliminar</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>
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
