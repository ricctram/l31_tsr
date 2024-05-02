<!-- Navbar -->
<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
  <div class="container-fluid">

   <div class="layout-menu-toggle navbar-nav d-lg-none align-items-lg-center">
      <a class="nav-item nav-link px-0 me-lg-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm align-middle"></i>
      </a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-ex-7">
   
    <ul class="navbar-nav ms-lg-auto">
    
        <?php if ($ionAuth->loggedIn()): ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>profilo"><i class="tf-icons navbar-icon bx bx-user"></i> Profilo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>impostazioni"><i class="tf-icons navbar-icon bx bx-cog"></i> Impostazioni</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>auth/logout"><i class="tf-icons navbar-icon bx bx-lock-open-alt"></i> Esci</a>
            </li>

        <?php else: ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>auth/login"><i class="tf-icons navbar-icon bx bx-user"></i> Accedi</a>
            </li>

        <?php endif; ?>
        
        <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">            
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class="bx bx-sm bx-sun"></i>
            </a>
            
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                  <span class="align-middle"><i class="bx bx-sun me-2"></i>Light</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                  <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
                </a>
              </li>
            </ul>
        </li>
    </ul>
   </div>
  </div>
</nav>
<!--/ Navbar -->
