<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

<?php if ($ionAuth->loggedIn()): ?>
  <div class="app-brand demo">
    <a href="<?= base_url(); ?>" class="app-brand-link gap-2">
      <span class="app-brand-text menu-text fw-bold">TSR
        <br />
        
          <?php if ($ionAuth->inGroup('admin')): ?>
          <span class="fs-tiny fw-medium">Admin</span>
          <?php else : ?>
          <span class="fs-tiny fw-medium">Utente</span>
          <?php endif; ?>
      </span>
    </a>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-menu d-none d-lg-block bx-sm align-middle"></i>
      <i class="bx bx-x d-block d-lg-none bx-sm align-middle"></i>
    </a>
  </div>
  <?php else : ?>
    <div class="app-brand demo px-4 ms-2">
      <a href="<?= base_url(); ?>" class="app-brand-text demo menu-text fw-bold">TSR</a>
  </div>
  <div class="menu-divider mt-0  ">
  </div>
<?php endif; ?>

<div class="menu menu-vertical bg-menu-theme py-3 overflow-hidden" id="menu-1">
  <ul class="menu-inner">
    
    <li class="menu-item">
      <a class="menu-link" href="<?= base_url(); ?>"><i class="menu-icon bx bx-home-circle"></i>
      <div>
        Bacheca
      </div></a>
    </li>
    
    <?php if ($ionAuth->loggedIn()): ?>
      <?php if ($ionAuth->inGroup('admin')): ?>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text" data-i18n="Gestione eventi"></span>
      </li>

      
      <li class="menu-item">
        <a class="menu-link" href="<?= base_url(); ?>evento"><i class="menu-icon bx bx-calendar"></i>
        <div>
          Tutti gli eventi
        </div></a>
      </li>
      <li class="menu-item">
        <a class="menu-link" href="<?= base_url(); ?>evento/create"><i class="menu-icon bx bx-plus"></i>
        <div>
          Aggiungi evento
        </div></a>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text" data-i18n="Gestione menu"></span>
      </li>
      
      
      <li class="menu-item">
        <a class="menu-link" href="<?= base_url(); ?>menu"><i class="menu-icon bx bx-dish"></i>
        <div>
          Tutti i menu
        </div></a>
      </li>
      <li class="menu-item">
        <a class="menu-link" href="<?= base_url(); ?>menu/create"><i class="menu-icon bx bx-plus"></i>
        <div>
          Aggiungi menu
        </div></a>
      </li>
      <li class="menu-item">
        <a class="menu-link" href="<?= base_url(); ?>menu_item"><i class="menu-icon bx bx-bowl-hot"></i>
        <div>
          Tutti i piatti
        </div></a>
      </li>
      <li class="menu-item">
        <a class="menu-link" href="<?= base_url(); ?>menu_item/create"><i class="menu-icon bx bx-plus"></i>
        <div>
          Aggiungi piatto
        </div></a>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text" data-i18n="Gestione utenti"></span>
      </li>    
      
      <li class="menu-item">
        <a class="menu-link" href="<?= base_url(); ?>auth"><i class="menu-icon bx bx-user"></i>
        <div>
          Tutti gli utenti
        </div></a>
      </li>
      <li class="menu-item">
        <a class="menu-link" href="<?= base_url(); ?>auth/create_user"><i class="menu-icon bx bx-user-plus"></i>
        <div>
          Aggiungi utente
        </div></a>
      </li>
      <li class="menu-item">
        <a class="menu-link" href="<?= base_url(); ?>auth/create_group"><i class="menu-icon bx bx-user-plus"></i>
        <div>
          Aggiungi gruppo
        </div></a>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text" data-i18n="Impostazioni sala"></span>
      </li>    
      
      <li class="menu-item disabled">
        <a class="menu-link" href="#"><i class='menu-icon bx bx-building-house' ></i>
        <div>
          Le mie sale
        </div></a>
      </li>
      <li class="menu-item disabled">
        <a class="menu-link" href="#"><i class="menu-icon bx bx-plus"></i>
        <div>
          Aggiungi sala
        </div></a>
      </li>

      <?php else: ?>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text" data-i18n="Area eventi"></span>
      </li>

      
      <li class="menu-item disabled">
        <a class="menu-link" href="#"><i class="menu-icon bx bx-calendar"></i>
        <div>
          I miei eventi
        </div></a>
      </li>

      <?php endif; ?>
    <?php endif; ?>

      </ul>
    </li>
  </ul>
</div>

</aside>
<!--/ Menu -->