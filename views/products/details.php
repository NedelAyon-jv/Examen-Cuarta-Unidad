<?php 

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
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="sticky-md-top product-sticky">
                      <div id="carouselExampleCaptions" class="carousel slide ecomm-prod-slider" data-bs-ride="carousel">
                        <div class="carousel-inner bg-light rounded position-relative">
                          <div class="card-body position-absolute end-0 top-0">
                            <div class="form-check prod-likes">
                              <input type="checkbox" class="form-check-input" />
                              <i data-feather="heart" class="prod-likes-icon"></i>
                            </div>
                          </div>
                          <div class="card-body position-absolute bottom-0 end-0">
                            <ul class="list-inline ms-auto mb-0 prod-likes">
                              <li class="list-inline-item m-0">
                                <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                  <i class="ti ti-zoom-in f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item m-0">
                                <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                  <i class="ti ti-zoom-out f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item m-0">
                                <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                  <i class="ti ti-rotate-clockwise f-18"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="carousel-item active">
                            <img src="<?= BASE_PATH ?>assets/images/application/img-prod-1.jpg" class="d-block w-100" alt="Product images" />
                          </div>
                          
                        </div>
                        <ol class="list-inline carousel-indicators position-relative product-carousel-indicators my-sm-3 mx-0">
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="list-inline-item w-25 h-auto active">
                            <img src="<?= BASE_PATH ?>assets/images/application/img-prod-1.jpg" class="d-block wid-50 rounded" alt="Product images" />
                          </li>
                          
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <span class="badge bg-success f-14">Status</span>
                    <h5 class="my-3">Producto</h5>
                    <h5 class="mt-4 mb-sm-3 mb-2 f-w-500">Informacion</h5>
                    <ul>
                      <li class="mb-2">Descripcion:()</li>
                      <li class="mb-2">Caracteristicas:()</li>
                      <li class="mb-2">Palabras claves:()</li>
                      <li class="mb-2">Marca:()</li>
                    </ul>
                    <div class="mb-3 row">
                      <label class="col-form-label col-lg-3 col-sm-12">Quantity <span class="text-danger">*</span></label>
                      <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="btn-group btn-group-sm mb-2 border" role="group">
                          <button type="button" id="decrease" onclick="decreaseValue('number')" class="btn btn-link-secondary"
                            ><i class="ti ti-minus"></i
                          ></button>
                          <input
                            class="wid-35 text-center border-0 m-0 form-control rounded-0 shadow-none"
                            type="text"
                            id="number"
                            value="0"
                          />
                          <button type="button" id="increase" onclick="increaseValue('number')" class="btn btn-link-secondary"
                            ><i class="ti ti-plus"></i
                          ></button>
                        </div>
                      </div>
                    </div>
                    <h3 class="mb-4"
                      ><b>$299.00</b><span class="mx-2 f-16 text-muted f-w-400 text-decoration-line-through">$399.00</span></h3
                    >
                    <div class="row">
                      <div class="col-6">
                        <div class="d-grid">
                          <button type="button" class="btn btn-primary">Comprar</button>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="d-grid">
                          <button type="button" class="btn btn-outline-secondary">Añadir al carrito</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header pb-0">
                <ul class="nav nav-tabs profile-tabs mb-0" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      id="ecomtab-tab-1"
                      data-bs-toggle="tab"
                      href="#ecomtab-1"
                      role="tab"
                      aria-controls="ecomtab-1"
                      aria-selected="true"
                      >Caracteristicas
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="ecomtab-tab-3"
                      data-bs-toggle="tab"
                      href="#ecomtab-3"
                      role="tab"
                      aria-controls="ecomtab-3"
                      aria-selected="true"
                      >Descripcion
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane show active" id="ecomtab-1" role="tabpanel" aria-labelledby="ecomtab-tab-1">
                    <div class="table-responsive">
                      <table class="table table-borderless mb-0">
                        <tbody>
                          <tr>
                            <td class="text-muted py-1">Caracteristicas:</td>
                            <td class="py-1">Aqui van las caracteristicas</td>
                          </tr>  
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="ecomtab-3" role="tabpanel" aria-labelledby="ecomtab-tab-3">
                    <div class="table-responsive">
                      <p class="text-muted">
                        Descripcion
                      </p>
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
  <!-- [Body] end -->undefined
</html>