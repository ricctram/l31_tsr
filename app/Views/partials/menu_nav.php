<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

<div class="menu menu-vertical bg-menu-theme py-3 overflow-hidden" id="menu-1" style="height: 450px">
  <ul class="menu-inner">
    <li class="menu-item">
      <a class="menu-link menu-toggle" href="javascript:void(0)"><i class="menu-icon bx bx-home-circle"></i>
      <div>
        Bacheca
      </div></a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a class="menu-link" href="javascript:void(0)">
          <div>
            Dashboard 1
          </div></a>
        </li>
        <li class="menu-item">
          <a class="menu-link" href="javascript:void(0)">
          <div>
            Dashboard 2
          </div></a>
        </li>
        <li class="menu-item">
          <a class="menu-link" href="javascript:void(0)">
          <div>
            Dashboard 3
          </div></a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a class="menu-link menu-toggle" href="javascript:void(0)"><i class="menu-icon bx bx-dock-top"></i>
      <div>
        Pages
      </div></a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a class="menu-link" href="javascript:void(0)">
          <div>
            Account Settings
          </div></a>
        </li>
        <li class="menu-item">
          <a class="menu-link menu-toggle" href="javascript:void(0)">
          <div>
            Users
          </div></a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a class="menu-link" href="javascript:void(0)">
              <div>
                List
              </div></a>
            </li>
            <li class="menu-item">
              <a class="menu-link" href="javascript:void(0)">
              <div>
                View
              </div></a>
            </li>
            <li class="menu-item">
              <a class="menu-link" href="javascript:void(0)">
              <div>
                Edit
              </div></a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a class="menu-link menu-toggle" href="javascript:void(0)">
          <div>
            Authentication
          </div></a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a class="menu-link" href="javascript:void(0)">
              <div>
                Login
              </div></a>
            </li>
            <li class="menu-item">
              <a class="menu-link" href="javascript:void(0)">
              <div>
                Register
              </div></a>
            </li>
            <li class="menu-item">
              <a class="menu-link" href="javascript:void(0)">
              <div>
                Forgot Password
              </div></a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="menu-item active">
      <a class="menu-link" href="javascript:void(0)"><i class="menu-icon bx bx-envelope"></i>
      <div>
        Email
      </div></a>
    </li>
    <li class="menu-item">
      <a class="menu-link" href="javascript:void(0)"><i class="menu-icon bx bx-message-square"></i>
      <div>
        Chat
      </div></a>
    </li>
    <li class="menu-item">
      <a class="menu-link" href="javascript:void(0)"><i class="menu-icon bx bx-task"></i>
      <div>
        Todo
      </div></a>
    </li>
    <li class="menu-item">
      <a class="menu-link" href="javascript:void(0)"><i class="menu-icon bx bx-calendar"></i>
      <div>
        Calendar
      </div></a>
    </li>
    <li class="menu-item">
      <a class="menu-link" href="javascript:void(0)"><i class="menu-icon bx bx-grid-alt"></i>
      <div>
        Kanban
      </div></a>
    </li>
    <li class="menu-item">
      <a class="menu-link" href="javascript:void(0)"><i class="menu-icon bx bx-receipt"></i>
      <div>
        Invoice
      </div></a>
    </li>
  </ul>
</div>





    <ul>
        <li><a href="<?= base_url(); ?>">Bacheca</a></li>
        <?php if ($ionAuth->loggedIn()): ?>
        <?php if ($ionAuth->inGroup('admin')): ?>
        <li>
            <a href="#">Eventi</a>
            <ul>
                <li><a href="<?= base_url(); ?>evento">Tutti gli Eventi</a></li>
                <li><a href="<?= base_url(); ?>evento/create">Aggiungi Evento</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Menu</a>
            <ul>
                <li><a href="<?= base_url(); ?>menu">Tutti i Menu</a></li>
                <li><a href="<?= base_url(); ?>menu/create">Aggiungi Menu</a></li>
                <li><a href="<?= base_url(); ?>menu_item">Tutti i Piatti</a></li>
                <li><a href="<?= base_url(); ?>menu_item/create">Aggiungi Piatto</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Utenti</a>
            <ul>
                <li><a href="<?= base_url(); ?>auth">Tutti gli Utenti</a></li>
                <li><a href="<?= base_url(); ?>auth/create_user">Aggiungi Utente</a></li>
                <li><a href="<?= base_url(); ?>auth/create_group">Aggiungi Gruppo</a></li>
            </ul>
        </li>
        <li><a href="<?= base_url(); ?>profilo">Profilo</a></li>
        <li><a href="<?= base_url(); ?>auth/logout">Esci</a></li>
        <?php else: ?>
            <li>
                <a href="<?= base_url(); ?>evento/miei">Miei eventi</a>
            </li>
            <li><a href="<?= base_url(); ?>profilo">Profilo</a></li>
            <li><a href="<?= base_url(); ?>auth/logout">Esci</a></li>
        <?php endif; ?>
    <?php else: ?>
        <li><a href="<?= base_url(); ?>auth/login">Accedi</a></li>
    <?php endif; ?>
    </ul>
</aside>
<!--/ Menu -->