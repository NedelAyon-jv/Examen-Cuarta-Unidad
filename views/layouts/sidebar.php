<!-- [ Sidebar Menu ] start -->
<?php  


?>
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
    <a href="<?php echo BASE_PATH . "home/" ?>" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <a href="<?php echo BASE_PATH . "home/" ?>" style="
          display: flex; 
          align-items: center; 
          padding: 10px 15px; 
          text-decoration: none; 
          color: white; 
          background-color: #007bff; 
          border-radius: 8px; 
          font-size: 16px; 
          font-weight: bold; 
          transition: background-color 0.3s, transform 0.2s;"
          onmouseover="this.style.backgroundColor='#0056b3'; this.style.transform='scale(1.05)';"
          onmouseout="this.style.backgroundColor='#007bff'; this.style.transform='scale(1)';">
          <i class="fas fa-home" style="font-size: 24px; margin-right: 10px;"></i>
          <span>Examen Unidad 4</span>
        </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">

        <li class="pc-item pc-caption">
          <label>Modulos</label>
          <i class="ph-duotone ph-chart-pie"></i>
        </li>
        <li class="pc-item">
          <a href="<?php echo BASE_PATH . "products/" ?>" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-layout"></i>
            </span>
            <span class="pc-mtext">
              Productos
            </span>
          </a>
        </li>
        <li class="pc-item">
          <a href="<?php echo BASE_PATH . "users/" ?>" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-identification-card"></i>
            </span>
            <span class="pc-mtext">Usuarios</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="<?php echo BASE_PATH . "clientes/" ?>" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-identification-badge"></i>
            </span>
            <span class="pc-mtext" >Clientes</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-shopping-cart"></i>
            </span>
            <span class="pc-mtext">Catalogos</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?php echo BASE_PATH . "catalogo/categorias/" ?>">Categorias</a></li>
            <li class="pc-item"><a class="pc-link" href="<?php echo BASE_PATH . "catalogo/marcas/" ?>">Marcas</a></li>
            <li class="pc-item"><a class="pc-link" href="<?php echo BASE_PATH . "catalogo/etiquetas/" ?>">Etiquetas</a></li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="<?php echo BASE_PATH . "cupones/" ?>" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-currency-circle-dollar"></i>
            </span>
            <span class="pc-mtext">Cupones</span></a>
        </li>
        <li class="pc-item">
          <a href="<?php echo BASE_PATH . "ordenes/" ?>" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-newspaper"></i>
            </span>
            <span class="pc-mtext">Ordenes</span></a>
        </li>

        <li class="pc-item">
          <a href="<?php echo BASE_PATH . "profile/" ?>" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-user-circle"></i>
            </span>
            <span class="pc-mtext">
              Perfil
            </span>
          </a>
        </li>

      </ul>
      <div class="card nav-action-card bg-brand-color-4">
        <div class="card-body" style="background-image: url('<?= BASE_PATH ?>assets/images/layout/nav-card-bg.svg')">
          <h5 class="text-dark">Centro de ayuda</h5>
          <p class="text-dark text-opacity-75">Contactanos para mas informacion.</p>
          <a href="https://phoenixcoded.support-hub.io/" class="btn btn-primary" target="_blank">Ir al Centro de ayuda</a>
        </div>
      </div>
    </div>
    <div class="card pc-user-card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="<?= BASE_PATH ?>assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
          </div>
          <div class="flex-grow-1 ms-3">
            <div class="dropdown">
              <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1 me-2">
                    <h6 class="mb-0"><?= $_SESSION['user_data']-> name?></h6>
                    <small><?= $_SESSION['user_data']-> email?></small>
                  </div>
                  <div class="flex-shrink-0">
                    <div class="btn btn-icon btn-link-secondary avtar">
                      <i class="ph-duotone ph-windows-logo"></i>
                    </div>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu">
                <ul>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-user"></i>
                      <span>Cuenta</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-gear"></i>
                      <span>Configuracion</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-power"></i>
                      <span>Cerrar Sesion</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->